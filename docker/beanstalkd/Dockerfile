FROM alpine

RUN apk add --no-cache beanstalkd

EXPOSE 11300

ENTRYPOINT /usr/bin/beanstalkd -l 0.0.0.0 -p 11300 -z 32768
#ENTRYPOINT ["/usr/bin/beanstalkd", '-l', 'unix:///data/beanstalkd.sock', '-z', '32768']

