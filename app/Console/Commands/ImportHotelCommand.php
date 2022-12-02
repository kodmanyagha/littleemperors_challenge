<?php

namespace App\Console\Commands;

use App\Services\Hotel\Enums\DelimiterEnum;
use App\Services\Hotel\Enums\InsertModeEnum;
use App\Services\Hotel\HotelService;
use Exception;
use Illuminate\Console\Command;

class ImportHotelCommand extends Command
{
    /**
     * @var string
     */
    protected $description = 'Hotel import from CSV file.';

    public function __construct(
        private readonly HotelService $hotelService
    )
    {
        $this->signature = implode(' ', [
            'import:hotels',
            '{--F|file=./hotels.csv : Full path for CSV file.}',
            '{--D|delimiter=; : CSV row delimiter. [",", ";", "tab"]}',
            '{--M|mode=bulk : Import mode. Use SQL bulk insert or MySQL LOAD DATA FILE. [bulk, load] }',
            '{--I|interactive : Command interactive mode.}',
            '{--O|override : Override existing or just create new.}',
        ]);
        config(['logging.default' => 'stdout']);

        parent::__construct();
    }

    /**
     * @throws Exception
     */
    protected function normalizeOptionsInteractive()
    {
        //////////////////////////////////////////////////
        // TODO Handle interactive mode in here.
        //////////////////////////////////////////////////

        throw new Exception('Not implemented yet. Please use non-interactive mode.');
    }

    /**
     * @return array
     * @throws Exception
     */
    protected function normalizeOptions(): array
    {
        if ($this->option('interactive')) {
            return $this->normalizeOptionsInteractive();
        }

        $file = $this->option('file');
        if (!is_readable($file)) {
            throw  new Exception('File not readable or accessible.');
        }

        $fileInfo = pathinfo($file);
        if ($fileInfo['extension'] != 'csv') {
            throw  new Exception('File is not a CSV.');
        }

        $delimiter = $this->option('delimiter');
        if (!in_array($delimiter, [',', ';', 'tab'])) {
            throw  new Exception('Wrong delimiter.');
        }
        if ($delimiter == 'tab') {
            $delimiter = "\t";
        }
        $delimiter = DelimiterEnum::tryFrom($delimiter);

        $mode = $this->option('mode');
        if (!in_array($mode, ['bulk', 'load'])) {
            throw  new Exception('Wrong mode.');
        }
        $mode = InsertModeEnum::tryFrom($mode);

        $override = $this->option('override');

        return [
            'file'      => $file,
            'delimiter' => $delimiter,
            'mode'      => $mode,
            'override'  => $override,
        ];
    }

    /**
     * Execute the console command.
     *
     * @return int
     * @throws Exception
     */
    public function handle(): int
    {
        $options = $this->normalizeOptions();

        [$totalTime, $result] = runTimeDetect(fn() => $this->hotelService->importCsvFile(
            $options['file'],
            $options['delimiter'],
            $options['mode'],
            $options['override'],
        ));

        $this->info('Total execution time: ' . $totalTime . ' sec.');

        return static::SUCCESS;
    }
}
