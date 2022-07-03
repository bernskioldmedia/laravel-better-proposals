<?php

namespace BernskioldMedia\BetterProposals;

use BernskioldMedia\BetterProposals\Resources\Currency;
use BernskioldMedia\BetterProposals\Resources\Proposal;
use BernskioldMedia\BetterProposals\Resources\ClientContact;
use BernskioldMedia\BetterProposals\Resources\Company;
use BernskioldMedia\BetterProposals\Resources\Estimate;
use BernskioldMedia\BetterProposals\Resources\EstimateItemCategory;
use BernskioldMedia\BetterProposals\Resources\EstimateMessage;
use BernskioldMedia\BetterProposals\Resources\Expense;
use BernskioldMedia\BetterProposals\Resources\ExpenseCategory;
use BernskioldMedia\BetterProposals\Resources\Invoice;
use BernskioldMedia\BetterProposals\Resources\InvoiceItemCategory;
use BernskioldMedia\BetterProposals\Resources\InvoiceMessage;
use BernskioldMedia\BetterProposals\Resources\InvoicePayments;
use BernskioldMedia\BetterProposals\Resources\Project;
use BernskioldMedia\BetterProposals\Resources\ProjectTaskAssignment;
use BernskioldMedia\BetterProposals\Resources\Reports\ExpenseReport;
use BernskioldMedia\BetterProposals\Resources\Reports\ProjectBudgetReport;
use BernskioldMedia\BetterProposals\Resources\Reports\TimeReport;
use BernskioldMedia\BetterProposals\Resources\Reports\UninvoicedReport;
use BernskioldMedia\BetterProposals\Resources\Role;
use BernskioldMedia\BetterProposals\Resources\Settings;
use BernskioldMedia\BetterProposals\Resources\Task;
use BernskioldMedia\BetterProposals\Resources\Template;
use BernskioldMedia\BetterProposals\Resources\TimeEntry;
use BernskioldMedia\BetterProposals\Resources\User;
use BernskioldMedia\BetterProposals\Resources\UserBillableRate;
use BernskioldMedia\BetterProposals\Resources\UserCostRate;
use BernskioldMedia\BetterProposals\Resources\UserProjectAssignment;

class BetterProposals
{
    public function __construct(
        public BetterProposalsClient $client,
    ) {
    }

    public function companies(): Company
    {
        return new Company($this->client);
    }

    public function currency(): Currency
    {
        return new Currency($this->client);
    }

    public function proposals(): Proposal
    {
        return new Proposal($this->client);
    }

    public function settings(): Settings
    {
        return new Settings($this->client);
    }

    public function template(): Template
    {
        return new Template($this->client);
    }

}
