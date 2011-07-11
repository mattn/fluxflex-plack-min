#!/usr/bin/env /usr/bin/perl
use strict;
use warnings;
use utf8;

use Plack::Handler::FCGI;

my $app = sub {
    my $env = shift;
    return [
      200, [ "Content-Type" => "text/plain; charset=utf-8"], [ "こんにちわ 世界" ]
    ];
};

Plack::Handler::FCGI->new->run($app);
