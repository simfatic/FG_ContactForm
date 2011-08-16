BEGIN {push @INC, 'D:\\MyProjects\\perlscripts\\Project\\Project\\EditionMaker'}
use strict;
use warnings;

use EditionMaker;

my $copier = new EditionMaker(common_source_folder=>".\\source");

$copier->MakeEditionsFromSubFolders(".\\source\\editions");