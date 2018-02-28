<?php

namespace PHPEDIParser;

class Parameters {
    //file types
    const IN_INSTALLMENT_PLAN_SALES_FILE = '03';
    const PAYMENTS_FILE = '04';
    const ANTICIPATION_RECEIVABLES_FILE = '06';
    const ASSIGNMENT_RECEIVABLES_FILE = '07';
    const PENDING_INSTALLMENT_FILE = '08';
    const OUTSTANDING_BALANCE_FILE = '09';
    

    //registers
    const HEADER_REGISTER = 0;
    const RO_DETAIL_REGISTER = 1;
    const CV_DETAIL_REGISTER = 2;
    const ARV_DETAIL_REGISTER = 5;
    const RO_ANTECIPED_DETAIL_REGISTER = 6;
    const RO_ANTECIPED_DEBIT_DETAIL_REGISTER = 7;
    const TRAILER_REGISTER = 9;
}