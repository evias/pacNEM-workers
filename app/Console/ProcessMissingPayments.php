<?php
/**
 * Part of the evias/nem-php-examples package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    evias/nem-php-examples
 * @version    1.0.0
 * @author     Grégory Saive <greg@evias.be>
 * @license    MIT License
 * @copyright  (c) 2017-2018, Grégory Saive <greg@evias.be>
 * @link       http://github.com/evias/nem-php-examples
 */
namespace App\Console;

use Illuminate\Console\Command;

class ProcessMissingPayments 
    extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'process-missing-payments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process missing PacNEM Payments (Paid invoices which did not receive their Credits).';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info("OK");
    }
}
