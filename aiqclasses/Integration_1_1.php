<?php

include_once('Login.php');
include_once('LoginResponse.php');
include_once('GetGLAccountList.php');
include_once('GetGLAccountListResponse.php');
include_once('WSResult2OfArrayOfArrayOfString.php');
include_once('WSResultStatus.php');
include_once('OperationResult.php');
include_once('OperationStatus.php');
include_once('VisorExceptionCodes.php');
include_once('GetTaxCodeList.php');
include_once('GetTaxCodeListResponse.php');
include_once('WSResult2OfArrayOfTax.php');
include_once('Tax.php');
include_once('InfoBase.php');
include_once('ObjectBase.php');
include_once('TaxChecker.php');
include_once('InfoCheckerBase.php');
include_once('GetCreditTermList.php');
include_once('GetCreditTermListResponse.php');
include_once('WSResult2OfArrayOfCreditTerm.php');
include_once('CreditTerm.php');
include_once('CreditTermChecker.php');
include_once('GetDepartmentList.php');
include_once('GetDepartmentListResponse.php');
include_once('WSResult2OfArrayOfDepartment.php');
include_once('Department.php');
include_once('GetActiveCustomerList.php');
include_once('GetActiveCustomerListResponse.php');
include_once('WSResult2OfArrayOfCustomer.php');
include_once('Customer.php');
include_once('Account.php');
include_once('LedgerType.php');
include_once('GetCustomer.php');
include_once('GetCustomerResponse.php');
include_once('WSResult2OfCustomer.php');
include_once('UpdateCustomer.php');
include_once('UpdateCustomerResponse.php');
include_once('WSResult2OfBoolean.php');
include_once('GetCustomersStatement.php');
include_once('GetCustomersStatementResponse.php');
include_once('WSResult2OfArrayOfCustomerStatement.php');
include_once('CustomerStatement.php');
include_once('CustomerState.php');
include_once('TransactionState.php');
include_once('GetNewCustomerFromDefaults.php');
include_once('GetNewCustomerFromDefaultsResponse.php');
include_once('GetCustomerBalanceInformation.php');
include_once('GetCustomerBalanceInformationResponse.php');
include_once('WSResult2OfArrayOfAccountBalanceInformation.php');
include_once('AccountBalanceInformation.php');
include_once('GetActiveSupplierList.php');
include_once('GetActiveSupplierListResponse.php');
include_once('WSResult2OfArrayOfSupplier.php');
include_once('Supplier.php');
include_once('GetNewSupplierFromDefaults.php');
include_once('GetNewSupplierFromDefaultsResponse.php');
include_once('WSResult2OfSupplier.php');
include_once('UpdateSupplier.php');
include_once('UpdateSupplierResponse.php');
include_once('GetSupplier.php');
include_once('GetSupplierResponse.php');
include_once('GetSupplierBalanceInformation.php');
include_once('GetSupplierBalanceInformationResponse.php');
include_once('GetAccountBalanceInformation.php');
include_once('GetAccountBalanceInformationResponse.php');
include_once('GetStockItem.php');
include_once('GetStockItemResponse.php');
include_once('WSResult2OfStockItem.php');
include_once('StockItem.php');
include_once('GetNewStockItemFromDefaults.php');
include_once('GetNewStockItemFromDefaultsResponse.php');
include_once('SaveStockItem.php');
include_once('SaveStockItemResponse.php');
include_once('GetStockItemList.php');
include_once('GetStockItemListResponse.php');
include_once('WSResult2OfArrayOfStockItem.php');
include_once('GetActiveStockItemList.php');
include_once('GetActiveStockItemListResponse.php');
include_once('GetInactiveStockItemList.php');
include_once('GetInactiveStockItemListResponse.php');
include_once('GetAllActiveStockInformation.php');
include_once('GetAllActiveStockInformationResponse.php');
include_once('WSResult2OfArrayOfItemLocationSublocationInformation.php');
include_once('ItemLocationSublocationInformation.php');
include_once('GetStockItemLocationStatus.php');
include_once('GetStockItemLocationStatusResponse.php');
include_once('WSResult2OfArrayOfStockItemLocationStatus.php');
include_once('StockItemLocationStatus.php');
include_once('GetOrder.php');
include_once('GetOrderResponse.php');
include_once('WSResult2OfOrder.php');
include_once('Order.php');
include_once('OrderStatus.php');
include_once('OrderLine.php');
include_once('GetNewSalesOrder.php');
include_once('GetNewSalesOrderResponse.php');
include_once('GetNewPurchasesOrder.php');
include_once('GetNewPurchasesOrderResponse.php');
include_once('SaveOrder.php');
include_once('SaveOrderResponse.php');
include_once('GetNewDeliveryLine.php');
include_once('GetNewDeliveryLineResponse.php');
include_once('WSResult2OfDeliveryLine.php');
include_once('DeliveryLine.php');
include_once('DeliveryStatus.php');
include_once('DeliverOrderLines.php');
include_once('DeliverOrderLinesResponse.php');
include_once('GetInvoiceFromOrder.php');
include_once('GetInvoiceFromOrderResponse.php');
include_once('WSResult2OfInvoice.php');
include_once('Invoice.php');
include_once('InvoiceBase.php');
include_once('InvoiceStatus.php');
include_once('InvoiceLine.php');
include_once('InvoiceType.php');
include_once('GetOrdersByExternalReference.php');
include_once('GetOrdersByExternalReferenceResponse.php');
include_once('WSResult2OfArrayOfOrder.php');
include_once('GetOrdersByCustomerCode.php');
include_once('GetOrdersByCustomerCodeResponse.php');
include_once('CreateBatchSalesInvoice.php');
include_once('BatchSalesInvoice.php');
include_once('BatchSalesInvoiceLine.php');
include_once('BatchInvoiceLine.php');
include_once('CreateBatchSalesInvoiceResponse.php');
include_once('WSResult2OfString.php');
include_once('CreateBatchSalesCreditNote.php');
include_once('BatchSalesCreditNote.php');
include_once('BatchSalesCreditNoteLine.php');
include_once('CreateBatchSalesCreditNoteResponse.php');
include_once('CreateBatchPurchasesInvoice.php');
include_once('BatchPurchasesInvoice.php');
include_once('BatchPurchasesInvoiceLine.php');
include_once('CreateBatchPurchasesInvoiceResponse.php');
include_once('CreateBatchPurchasesDebitNote.php');
include_once('BatchPurchasesDebitNote.php');
include_once('BatchPurchasesDebitNoteLine.php');
include_once('CreateBatchPurchasesDebitNoteResponse.php');
include_once('GetNewBatchSalesInvoice.php');
include_once('GetNewBatchSalesInvoiceResponse.php');
include_once('WSResult2OfBatchSalesInvoice.php');
include_once('GetNewBatchSalesCreditNote.php');
include_once('GetNewBatchSalesCreditNoteResponse.php');
include_once('WSResult2OfBatchSalesCreditNote.php');
include_once('GetNewBatchPurchasesInvoice.php');
include_once('GetNewBatchPurchasesInvoiceResponse.php');
include_once('WSResult2OfBatchPurchasesInvoice.php');
include_once('GetNewBatchPurchasesDebitNote.php');
include_once('GetNewBatchPurchasesDebitNoteResponse.php');
include_once('WSResult2OfBatchPurchasesDebitNote.php');
include_once('GetInvoice.php');
include_once('GetInvoiceResponse.php');
include_once('GetNewSalesInvoice.php');
include_once('GetNewSalesInvoiceResponse.php');
include_once('GetNewSalesInvoices.php');
include_once('GetNewSalesInvoicesResponse.php');
include_once('WSResult2OfArrayOfInvoice.php');
include_once('GetNewPurchasesInvoice.php');
include_once('GetNewPurchasesInvoiceResponse.php');
include_once('GetNewPurchasesInvoices.php');
include_once('GetNewPurchasesInvoicesResponse.php');
include_once('SaveInvoice.php');
include_once('SaveInvoiceResponse.php');
include_once('SaveInvoiceGetBackInvoiceID.php');
include_once('SaveInvoiceGetBackInvoiceIDResponse.php');
include_once('SaveInvoiceSpecifyCostGetBackInvoiceID.php');
include_once('SaveInvoiceSpecifyCostGetBackInvoiceIDResponse.php');
include_once('CreateInvoicesGetBackInvoiceIDs.php');
include_once('CreateInvoicesGetBackInvoiceIDsResponse.php');
include_once('WSResult2OfArrayOfWSResultStatus.php');
include_once('CreateInvoicesSpecifyCostGetBackInvoiceIDs.php');
include_once('CreateInvoicesSpecifyCostGetBackInvoiceIDsResponse.php');
include_once('CreateCreditNotesGetBackCreditNoteIDs.php');
include_once('CreditNote.php');
include_once('CreateCreditNotesGetBackCreditNoteIDsResponse.php');
include_once('CreateCreditNotesSpecifyCostGetBackCreditNoteIDs.php');
include_once('CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResponse.php');
include_once('PostInvoice.php');
include_once('PostInvoiceResponse.php');
include_once('PostInvoiceGetBackTransactionID.php');
include_once('PostInvoiceGetBackTransactionIDResponse.php');
include_once('PostInvoicesGetBackTransactionIDs.php');
include_once('PostInvoicesGetBackTransactionIDsResponse.php');
include_once('GetInvoicesByExternalReference.php');
include_once('GetInvoicesByExternalReferenceResponse.php');
include_once('GetInvoicesByCustomerCode.php');
include_once('GetInvoicesByCustomerCodeResponse.php');
include_once('GetInvoicesBySupplierCode.php');
include_once('GetInvoicesBySupplierCodeResponse.php');
include_once('GetCreditNote.php');
include_once('GetCreditNoteResponse.php');
include_once('WSResult2OfCreditNote.php');
include_once('GetNewSalesCreditNote.php');
include_once('GetNewSalesCreditNoteResponse.php');
include_once('GetNewSalesCreditNotes.php');
include_once('GetNewSalesCreditNotesResponse.php');
include_once('WSResult2OfArrayOfCreditNote.php');
include_once('GetNewPurchasesDebitNote.php');
include_once('GetNewPurchasesDebitNoteResponse.php');
include_once('SaveCreditNote.php');
include_once('SaveCreditNoteResponse.php');
include_once('SaveCreditNoteSpecifyCostGetBackCreditNoteID.php');
include_once('SaveCreditNoteSpecifyCostGetBackCreditNoteIDResponse.php');
include_once('PostCreditNote.php');
include_once('PostCreditNoteResponse.php');
include_once('PostCreditNoteGetBackTransactionID.php');
include_once('PostCreditNoteGetBackTransactionIDResponse.php');
include_once('PostCreditNotesGetBackTransactionIDs.php');
include_once('PostCreditNotesGetBackTransactionIDsResponse.php');
include_once('GetCreditNotesByExternalReference.php');
include_once('GetCreditNotesByExternalReferenceResponse.php');
include_once('GetCreditNotesByCustomerCode.php');
include_once('GetCreditNotesByCustomerCodeResponse.php');
include_once('GetTransaction.php');
include_once('GetTransactionResponse.php');
include_once('WSResult2OfTransaction.php');
include_once('Transaction.php');
include_once('TransactionLine.php');
include_once('RType.php');
include_once('Type.php');
include_once('GetTransactionByInvoiceID.php');
include_once('GetTransactionByInvoiceIDResponse.php');
include_once('AllocateTransactions.php');
include_once('AllocateTransactionsResponse.php');
include_once('AllocateTransactionsWithDiscount.php');
include_once('AllocateTransactionsWithDiscountResponse.php');
include_once('CreateGeneralJournal.php');
include_once('GeneralJournal.php');
include_once('GeneralJournalLine.php');
include_once('CreateGeneralJournalResponse.php');
include_once('GetItemGroupList.php');
include_once('GetItemGroupListResponse.php');
include_once('WSResult2OfArrayOfItemGroup.php');
include_once('ItemGroup.php');
include_once('GetStockItemGroupList.php');
include_once('GetStockItemGroupListResponse.php');
include_once('SaveSalesReceipt.php');
include_once('SalesReceipt.php');
include_once('SaveSalesReceiptResponse.php');
include_once('SaveSalesReceiptGetBackTransactionID.php');
include_once('SaveSalesReceiptGetBackTransactionIDResponse.php');
include_once('SavePurchasePayment.php');
include_once('PurchasePayment.php');
include_once('SavePurchasePaymentResponse.php');
include_once('SavePurchasePaymentGetBackTransactionID.php');
include_once('SavePurchasePaymentGetBackTransactionIDResponse.php');
include_once('GetDeliveryRouteList.php');
include_once('GetDeliveryRouteListResponse.php');
include_once('WSResult2OfArrayOfDeliveryRoute.php');
include_once('DeliveryRoute.php');
include_once('GetBankList.php');
include_once('GetBankListResponse.php');
include_once('WSResult2OfArrayOfBank.php');
include_once('Bank.php');
include_once('OnlineBankTypes.php');
include_once('GetCurrencyList.php');
include_once('GetCurrencyListResponse.php');
include_once('WSResult2OfArrayOfString.php');
include_once('GetCurrencyExchangeRate.php');
include_once('GetCurrencyExchangeRateResponse.php');
include_once('WSResult2OfDecimal.php');
include_once('GetPriceLists.php');
include_once('GetPriceListsResponse.php');
include_once('WSResult2OfArrayOfPriceList.php');
include_once('PriceList.php');
include_once('PriceListItem.php');
include_once('GetBankDefaults.php');
include_once('GetBankDefaultsResponse.php');
include_once('WSResult2OfBankDefaults.php');
include_once('BankDefaults.php');
include_once('SaveBankDefaults.php');
include_once('SaveBankDefaultsResponse.php');
include_once('CheckBankDefaultsValidity.php');
include_once('CheckBankDefaultsValidityResponse.php');
include_once('GetCustomerDefaults.php');
include_once('GetCustomerDefaultsResponse.php');
include_once('WSResult2OfAccountDefaults.php');
include_once('AccountDefaults.php');
include_once('GetSupplierDefaults.php');
include_once('GetSupplierDefaultsResponse.php');
include_once('SaveCustomerDefaults.php');
include_once('SaveCustomerDefaultsResponse.php');
include_once('SaveSupplierDefaults.php');
include_once('SaveSupplierDefaultsResponse.php');
include_once('CheckCustomerDefaultsValidity.php');
include_once('CheckCustomerDefaultsValidityResponse.php');
include_once('CheckSupplierDefaultsValidity.php');
include_once('CheckSupplierDefaultsValidityResponse.php');
include_once('GetGLDefaults.php');
include_once('GetGLDefaultsResponse.php');
include_once('WSResult2OfGLDefaults.php');
include_once('GLDefaults.php');
include_once('SaveGLDefaults.php');
include_once('SaveGLDefaultsResponse.php');
include_once('CheckGLDefaultsValidity.php');
include_once('CheckGLDefaultsValidityResponse.php');
include_once('GetStockItemDefaults.php');
include_once('GetStockItemDefaultsResponse.php');
include_once('WSResult2OfStockItemDefaults.php');
include_once('StockItemDefaults.php');
include_once('SaveStockItemDefaults.php');
include_once('SaveStockItemDefaultsResponse.php');
include_once('CheckStockItemDefaultsValidity.php');
include_once('CheckStockItemDefaultsValidityResponse.php');


/**
 * 
 */
class Integration_1_1 extends SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'Login' => 'Login',
    'LoginResponse' => 'LoginResponse',
    'GetGLAccountList' => 'GetGLAccountList',
    'GetGLAccountListResponse' => 'GetGLAccountListResponse',
    'WSResult2OfArrayOfArrayOfString' => 'WSResult2OfArrayOfArrayOfString',
    'WSResultStatus' => 'WSResultStatus',
    'OperationResult' => 'OperationResult',
    'GetTaxCodeList' => 'GetTaxCodeList',
    'GetTaxCodeListResponse' => 'GetTaxCodeListResponse',
    'WSResult2OfArrayOfTax' => 'WSResult2OfArrayOfTax',
    'Tax' => 'Tax',
    'InfoBase' => 'InfoBase',
    'ObjectBase' => 'ObjectBase',
    'TaxChecker' => 'TaxChecker',
    'InfoCheckerBase' => 'InfoCheckerBase',
    'GetCreditTermList' => 'GetCreditTermList',
    'GetCreditTermListResponse' => 'GetCreditTermListResponse',
    'WSResult2OfArrayOfCreditTerm' => 'WSResult2OfArrayOfCreditTerm',
    'CreditTerm' => 'CreditTerm',
    'CreditTermChecker' => 'CreditTermChecker',
    'GetDepartmentList' => 'GetDepartmentList',
    'GetDepartmentListResponse' => 'GetDepartmentListResponse',
    'WSResult2OfArrayOfDepartment' => 'WSResult2OfArrayOfDepartment',
    'Department' => 'Department',
    'GetActiveCustomerList' => 'GetActiveCustomerList',
    'GetActiveCustomerListResponse' => 'GetActiveCustomerListResponse',
    'WSResult2OfArrayOfCustomer' => 'WSResult2OfArrayOfCustomer',
    'Customer' => 'Customer',
    'Account' => 'Account',
    'GetCustomer' => 'GetCustomer',
    'GetCustomerResponse' => 'GetCustomerResponse',
    'WSResult2OfCustomer' => 'WSResult2OfCustomer',
    'UpdateCustomer' => 'UpdateCustomer',
    'UpdateCustomerResponse' => 'UpdateCustomerResponse',
    'WSResult2OfBoolean' => 'WSResult2OfBoolean',
    'GetCustomersStatement' => 'GetCustomersStatement',
    'GetCustomersStatementResponse' => 'GetCustomersStatementResponse',
    'WSResult2OfArrayOfCustomerStatement' => 'WSResult2OfArrayOfCustomerStatement',
    'CustomerStatement' => 'CustomerStatement',
    'CustomerState' => 'CustomerState',
    'TransactionState' => 'TransactionState',
    'GetNewCustomerFromDefaults' => 'GetNewCustomerFromDefaults',
    'GetNewCustomerFromDefaultsResponse' => 'GetNewCustomerFromDefaultsResponse',
    'GetCustomerBalanceInformation' => 'GetCustomerBalanceInformation',
    'GetCustomerBalanceInformationResponse' => 'GetCustomerBalanceInformationResponse',
    'WSResult2OfArrayOfAccountBalanceInformation' => 'WSResult2OfArrayOfAccountBalanceInformation',
    'AccountBalanceInformation' => 'AccountBalanceInformation',
    'GetActiveSupplierList' => 'GetActiveSupplierList',
    'GetActiveSupplierListResponse' => 'GetActiveSupplierListResponse',
    'WSResult2OfArrayOfSupplier' => 'WSResult2OfArrayOfSupplier',
    'Supplier' => 'Supplier',
    'GetNewSupplierFromDefaults' => 'GetNewSupplierFromDefaults',
    'GetNewSupplierFromDefaultsResponse' => 'GetNewSupplierFromDefaultsResponse',
    'WSResult2OfSupplier' => 'WSResult2OfSupplier',
    'UpdateSupplier' => 'UpdateSupplier',
    'UpdateSupplierResponse' => 'UpdateSupplierResponse',
    'GetSupplier' => 'GetSupplier',
    'GetSupplierResponse' => 'GetSupplierResponse',
    'GetSupplierBalanceInformation' => 'GetSupplierBalanceInformation',
    'GetSupplierBalanceInformationResponse' => 'GetSupplierBalanceInformationResponse',
    'GetAccountBalanceInformation' => 'GetAccountBalanceInformation',
    'GetAccountBalanceInformationResponse' => 'GetAccountBalanceInformationResponse',
    'GetStockItem' => 'GetStockItem',
    'GetStockItemResponse' => 'GetStockItemResponse',
    'WSResult2OfStockItem' => 'WSResult2OfStockItem',
    'StockItem' => 'StockItem',
    'GetNewStockItemFromDefaults' => 'GetNewStockItemFromDefaults',
    'GetNewStockItemFromDefaultsResponse' => 'GetNewStockItemFromDefaultsResponse',
    'SaveStockItem' => 'SaveStockItem',
    'SaveStockItemResponse' => 'SaveStockItemResponse',
    'GetStockItemList' => 'GetStockItemList',
    'GetStockItemListResponse' => 'GetStockItemListResponse',
    'WSResult2OfArrayOfStockItem' => 'WSResult2OfArrayOfStockItem',
    'GetActiveStockItemList' => 'GetActiveStockItemList',
    'GetActiveStockItemListResponse' => 'GetActiveStockItemListResponse',
    'GetInactiveStockItemList' => 'GetInactiveStockItemList',
    'GetInactiveStockItemListResponse' => 'GetInactiveStockItemListResponse',
    'GetAllActiveStockInformation' => 'GetAllActiveStockInformation',
    'GetAllActiveStockInformationResponse' => 'GetAllActiveStockInformationResponse',
    'WSResult2OfArrayOfItemLocationSublocationInformation' => 'WSResult2OfArrayOfItemLocationSublocationInformation',
    'ItemLocationSublocationInformation' => 'ItemLocationSublocationInformation',
    'GetStockItemLocationStatus' => 'GetStockItemLocationStatus',
    'GetStockItemLocationStatusResponse' => 'GetStockItemLocationStatusResponse',
    'WSResult2OfArrayOfStockItemLocationStatus' => 'WSResult2OfArrayOfStockItemLocationStatus',
    'StockItemLocationStatus' => 'StockItemLocationStatus',
    'GetOrder' => 'GetOrder',
    'GetOrderResponse' => 'GetOrderResponse',
    'WSResult2OfOrder' => 'WSResult2OfOrder',
    'Order' => 'Order',
    'OrderLine' => 'OrderLine',
    'GetNewSalesOrder' => 'GetNewSalesOrder',
    'GetNewSalesOrderResponse' => 'GetNewSalesOrderResponse',
    'GetNewPurchasesOrder' => 'GetNewPurchasesOrder',
    'GetNewPurchasesOrderResponse' => 'GetNewPurchasesOrderResponse',
    'SaveOrder' => 'SaveOrder',
    'SaveOrderResponse' => 'SaveOrderResponse',
    'GetNewDeliveryLine' => 'GetNewDeliveryLine',
    'GetNewDeliveryLineResponse' => 'GetNewDeliveryLineResponse',
    'WSResult2OfDeliveryLine' => 'WSResult2OfDeliveryLine',
    'DeliveryLine' => 'DeliveryLine',
    'DeliverOrderLines' => 'DeliverOrderLines',
    'DeliverOrderLinesResponse' => 'DeliverOrderLinesResponse',
    'GetInvoiceFromOrder' => 'GetInvoiceFromOrder',
    'GetInvoiceFromOrderResponse' => 'GetInvoiceFromOrderResponse',
    'WSResult2OfInvoice' => 'WSResult2OfInvoice',
    'Invoice' => 'Invoice',
    'InvoiceBase' => 'InvoiceBase',
    'InvoiceLine' => 'InvoiceLine',
    'GetOrdersByExternalReference' => 'GetOrdersByExternalReference',
    'GetOrdersByExternalReferenceResponse' => 'GetOrdersByExternalReferenceResponse',
    'WSResult2OfArrayOfOrder' => 'WSResult2OfArrayOfOrder',
    'GetOrdersByCustomerCode' => 'GetOrdersByCustomerCode',
    'GetOrdersByCustomerCodeResponse' => 'GetOrdersByCustomerCodeResponse',
    'CreateBatchSalesInvoice' => 'CreateBatchSalesInvoice',
    'BatchSalesInvoice' => 'BatchSalesInvoice',
    'BatchSalesInvoiceLine' => 'BatchSalesInvoiceLine',
    'BatchInvoiceLine' => 'BatchInvoiceLine',
    'CreateBatchSalesInvoiceResponse' => 'CreateBatchSalesInvoiceResponse',
    'WSResult2OfString' => 'WSResult2OfString',
    'CreateBatchSalesCreditNote' => 'CreateBatchSalesCreditNote',
    'BatchSalesCreditNote' => 'BatchSalesCreditNote',
    'BatchSalesCreditNoteLine' => 'BatchSalesCreditNoteLine',
    'CreateBatchSalesCreditNoteResponse' => 'CreateBatchSalesCreditNoteResponse',
    'CreateBatchPurchasesInvoice' => 'CreateBatchPurchasesInvoice',
    'BatchPurchasesInvoice' => 'BatchPurchasesInvoice',
    'BatchPurchasesInvoiceLine' => 'BatchPurchasesInvoiceLine',
    'CreateBatchPurchasesInvoiceResponse' => 'CreateBatchPurchasesInvoiceResponse',
    'CreateBatchPurchasesDebitNote' => 'CreateBatchPurchasesDebitNote',
    'BatchPurchasesDebitNote' => 'BatchPurchasesDebitNote',
    'BatchPurchasesDebitNoteLine' => 'BatchPurchasesDebitNoteLine',
    'CreateBatchPurchasesDebitNoteResponse' => 'CreateBatchPurchasesDebitNoteResponse',
    'GetNewBatchSalesInvoice' => 'GetNewBatchSalesInvoice',
    'GetNewBatchSalesInvoiceResponse' => 'GetNewBatchSalesInvoiceResponse',
    'WSResult2OfBatchSalesInvoice' => 'WSResult2OfBatchSalesInvoice',
    'GetNewBatchSalesCreditNote' => 'GetNewBatchSalesCreditNote',
    'GetNewBatchSalesCreditNoteResponse' => 'GetNewBatchSalesCreditNoteResponse',
    'WSResult2OfBatchSalesCreditNote' => 'WSResult2OfBatchSalesCreditNote',
    'GetNewBatchPurchasesInvoice' => 'GetNewBatchPurchasesInvoice',
    'GetNewBatchPurchasesInvoiceResponse' => 'GetNewBatchPurchasesInvoiceResponse',
    'WSResult2OfBatchPurchasesInvoice' => 'WSResult2OfBatchPurchasesInvoice',
    'GetNewBatchPurchasesDebitNote' => 'GetNewBatchPurchasesDebitNote',
    'GetNewBatchPurchasesDebitNoteResponse' => 'GetNewBatchPurchasesDebitNoteResponse',
    'WSResult2OfBatchPurchasesDebitNote' => 'WSResult2OfBatchPurchasesDebitNote',
    'GetInvoice' => 'GetInvoice',
    'GetInvoiceResponse' => 'GetInvoiceResponse',
    'GetNewSalesInvoice' => 'GetNewSalesInvoice',
    'GetNewSalesInvoiceResponse' => 'GetNewSalesInvoiceResponse',
    'GetNewSalesInvoices' => 'GetNewSalesInvoices',
    'GetNewSalesInvoicesResponse' => 'GetNewSalesInvoicesResponse',
    'WSResult2OfArrayOfInvoice' => 'WSResult2OfArrayOfInvoice',
    'GetNewPurchasesInvoice' => 'GetNewPurchasesInvoice',
    'GetNewPurchasesInvoiceResponse' => 'GetNewPurchasesInvoiceResponse',
    'GetNewPurchasesInvoices' => 'GetNewPurchasesInvoices',
    'GetNewPurchasesInvoicesResponse' => 'GetNewPurchasesInvoicesResponse',
    'SaveInvoice' => 'SaveInvoice',
    'SaveInvoiceResponse' => 'SaveInvoiceResponse',
    'SaveInvoiceGetBackInvoiceID' => 'SaveInvoiceGetBackInvoiceID',
    'SaveInvoiceGetBackInvoiceIDResponse' => 'SaveInvoiceGetBackInvoiceIDResponse',
    'SaveInvoiceSpecifyCostGetBackInvoiceID' => 'SaveInvoiceSpecifyCostGetBackInvoiceID',
    'SaveInvoiceSpecifyCostGetBackInvoiceIDResponse' => 'SaveInvoiceSpecifyCostGetBackInvoiceIDResponse',
    'CreateInvoicesGetBackInvoiceIDs' => 'CreateInvoicesGetBackInvoiceIDs',
    'CreateInvoicesGetBackInvoiceIDsResponse' => 'CreateInvoicesGetBackInvoiceIDsResponse',
    'WSResult2OfArrayOfWSResultStatus' => 'WSResult2OfArrayOfWSResultStatus',
    'CreateInvoicesSpecifyCostGetBackInvoiceIDs' => 'CreateInvoicesSpecifyCostGetBackInvoiceIDs',
    'CreateInvoicesSpecifyCostGetBackInvoiceIDsResponse' => 'CreateInvoicesSpecifyCostGetBackInvoiceIDsResponse',
    'CreateCreditNotesGetBackCreditNoteIDs' => 'CreateCreditNotesGetBackCreditNoteIDs',
    'CreditNote' => 'CreditNote',
    'CreateCreditNotesGetBackCreditNoteIDsResponse' => 'CreateCreditNotesGetBackCreditNoteIDsResponse',
    'CreateCreditNotesSpecifyCostGetBackCreditNoteIDs' => 'CreateCreditNotesSpecifyCostGetBackCreditNoteIDs',
    'CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResponse' => 'CreateCreditNotesSpecifyCostGetBackCreditNoteIDsResponse',
    'PostInvoice' => 'PostInvoice',
    'PostInvoiceResponse' => 'PostInvoiceResponse',
    'PostInvoiceGetBackTransactionID' => 'PostInvoiceGetBackTransactionID',
    'PostInvoiceGetBackTransactionIDResponse' => 'PostInvoiceGetBackTransactionIDResponse',
    'PostInvoicesGetBackTransactionIDs' => 'PostInvoicesGetBackTransactionIDs',
    'PostInvoicesGetBackTransactionIDsResponse' => 'PostInvoicesGetBackTransactionIDsResponse',
    'GetInvoicesByExternalReference' => 'GetInvoicesByExternalReference',
    'GetInvoicesByExternalReferenceResponse' => 'GetInvoicesByExternalReferenceResponse',
    'GetInvoicesByCustomerCode' => 'GetInvoicesByCustomerCode',
    'GetInvoicesByCustomerCodeResponse' => 'GetInvoicesByCustomerCodeResponse',
    'GetInvoicesBySupplierCode' => 'GetInvoicesBySupplierCode',
    'GetInvoicesBySupplierCodeResponse' => 'GetInvoicesBySupplierCodeResponse',
    'GetCreditNote' => 'GetCreditNote',
    'GetCreditNoteResponse' => 'GetCreditNoteResponse',
    'WSResult2OfCreditNote' => 'WSResult2OfCreditNote',
    'GetNewSalesCreditNote' => 'GetNewSalesCreditNote',
    'GetNewSalesCreditNoteResponse' => 'GetNewSalesCreditNoteResponse',
    'GetNewSalesCreditNotes' => 'GetNewSalesCreditNotes',
    'GetNewSalesCreditNotesResponse' => 'GetNewSalesCreditNotesResponse',
    'WSResult2OfArrayOfCreditNote' => 'WSResult2OfArrayOfCreditNote',
    'GetNewPurchasesDebitNote' => 'GetNewPurchasesDebitNote',
    'GetNewPurchasesDebitNoteResponse' => 'GetNewPurchasesDebitNoteResponse',
    'SaveCreditNote' => 'SaveCreditNote',
    'SaveCreditNoteResponse' => 'SaveCreditNoteResponse',
    'SaveCreditNoteSpecifyCostGetBackCreditNoteID' => 'SaveCreditNoteSpecifyCostGetBackCreditNoteID',
    'SaveCreditNoteSpecifyCostGetBackCreditNoteIDResponse' => 'SaveCreditNoteSpecifyCostGetBackCreditNoteIDResponse',
    'PostCreditNote' => 'PostCreditNote',
    'PostCreditNoteResponse' => 'PostCreditNoteResponse',
    'PostCreditNoteGetBackTransactionID' => 'PostCreditNoteGetBackTransactionID',
    'PostCreditNoteGetBackTransactionIDResponse' => 'PostCreditNoteGetBackTransactionIDResponse',
    'PostCreditNotesGetBackTransactionIDs' => 'PostCreditNotesGetBackTransactionIDs',
    'PostCreditNotesGetBackTransactionIDsResponse' => 'PostCreditNotesGetBackTransactionIDsResponse',
    'GetCreditNotesByExternalReference' => 'GetCreditNotesByExternalReference',
    'GetCreditNotesByExternalReferenceResponse' => 'GetCreditNotesByExternalReferenceResponse',
    'GetCreditNotesByCustomerCode' => 'GetCreditNotesByCustomerCode',
    'GetCreditNotesByCustomerCodeResponse' => 'GetCreditNotesByCustomerCodeResponse',
    'GetTransaction' => 'GetTransaction',
    'GetTransactionResponse' => 'GetTransactionResponse',
    'WSResult2OfTransaction' => 'WSResult2OfTransaction',
    'Transaction' => 'Transaction',
    'TransactionLine' => 'TransactionLine',
    'GetTransactionByInvoiceID' => 'GetTransactionByInvoiceID',
    'GetTransactionByInvoiceIDResponse' => 'GetTransactionByInvoiceIDResponse',
    'AllocateTransactions' => 'AllocateTransactions',
    'AllocateTransactionsResponse' => 'AllocateTransactionsResponse',
    'AllocateTransactionsWithDiscount' => 'AllocateTransactionsWithDiscount',
    'AllocateTransactionsWithDiscountResponse' => 'AllocateTransactionsWithDiscountResponse',
    'CreateGeneralJournal' => 'CreateGeneralJournal',
    'GeneralJournal' => 'GeneralJournal',
    'GeneralJournalLine' => 'GeneralJournalLine',
    'CreateGeneralJournalResponse' => 'CreateGeneralJournalResponse',
    'GetItemGroupList' => 'GetItemGroupList',
    'GetItemGroupListResponse' => 'GetItemGroupListResponse',
    'WSResult2OfArrayOfItemGroup' => 'WSResult2OfArrayOfItemGroup',
    'ItemGroup' => 'ItemGroup',
    'GetStockItemGroupList' => 'GetStockItemGroupList',
    'GetStockItemGroupListResponse' => 'GetStockItemGroupListResponse',
    'SaveSalesReceipt' => 'SaveSalesReceipt',
    'SalesReceipt' => 'SalesReceipt',
    'SaveSalesReceiptResponse' => 'SaveSalesReceiptResponse',
    'SaveSalesReceiptGetBackTransactionID' => 'SaveSalesReceiptGetBackTransactionID',
    'SaveSalesReceiptGetBackTransactionIDResponse' => 'SaveSalesReceiptGetBackTransactionIDResponse',
    'SavePurchasePayment' => 'SavePurchasePayment',
    'PurchasePayment' => 'PurchasePayment',
    'SavePurchasePaymentResponse' => 'SavePurchasePaymentResponse',
    'SavePurchasePaymentGetBackTransactionID' => 'SavePurchasePaymentGetBackTransactionID',
    'SavePurchasePaymentGetBackTransactionIDResponse' => 'SavePurchasePaymentGetBackTransactionIDResponse',
    'GetDeliveryRouteList' => 'GetDeliveryRouteList',
    'GetDeliveryRouteListResponse' => 'GetDeliveryRouteListResponse',
    'WSResult2OfArrayOfDeliveryRoute' => 'WSResult2OfArrayOfDeliveryRoute',
    'DeliveryRoute' => 'DeliveryRoute',
    'GetBankList' => 'GetBankList',
    'GetBankListResponse' => 'GetBankListResponse',
    'WSResult2OfArrayOfBank' => 'WSResult2OfArrayOfBank',
    'Bank' => 'Bank',
    'GetCurrencyList' => 'GetCurrencyList',
    'GetCurrencyListResponse' => 'GetCurrencyListResponse',
    'WSResult2OfArrayOfString' => 'WSResult2OfArrayOfString',
    'GetCurrencyExchangeRate' => 'GetCurrencyExchangeRate',
    'GetCurrencyExchangeRateResponse' => 'GetCurrencyExchangeRateResponse',
    'WSResult2OfDecimal' => 'WSResult2OfDecimal',
    'GetPriceLists' => 'GetPriceLists',
    'GetPriceListsResponse' => 'GetPriceListsResponse',
    'WSResult2OfArrayOfPriceList' => 'WSResult2OfArrayOfPriceList',
    'PriceList' => 'PriceList',
    'PriceListItem' => 'PriceListItem',
    'GetBankDefaults' => 'GetBankDefaults',
    'GetBankDefaultsResponse' => 'GetBankDefaultsResponse',
    'WSResult2OfBankDefaults' => 'WSResult2OfBankDefaults',
    'BankDefaults' => 'BankDefaults',
    'SaveBankDefaults' => 'SaveBankDefaults',
    'SaveBankDefaultsResponse' => 'SaveBankDefaultsResponse',
    'CheckBankDefaultsValidity' => 'CheckBankDefaultsValidity',
    'CheckBankDefaultsValidityResponse' => 'CheckBankDefaultsValidityResponse',
    'GetCustomerDefaults' => 'GetCustomerDefaults',
    'GetCustomerDefaultsResponse' => 'GetCustomerDefaultsResponse',
    'WSResult2OfAccountDefaults' => 'WSResult2OfAccountDefaults',
    'AccountDefaults' => 'AccountDefaults',
    'GetSupplierDefaults' => 'GetSupplierDefaults',
    'GetSupplierDefaultsResponse' => 'GetSupplierDefaultsResponse',
    'SaveCustomerDefaults' => 'SaveCustomerDefaults',
    'SaveCustomerDefaultsResponse' => 'SaveCustomerDefaultsResponse',
    'SaveSupplierDefaults' => 'SaveSupplierDefaults',
    'SaveSupplierDefaultsResponse' => 'SaveSupplierDefaultsResponse',
    'CheckCustomerDefaultsValidity' => 'CheckCustomerDefaultsValidity',
    'CheckCustomerDefaultsValidityResponse' => 'CheckCustomerDefaultsValidityResponse',
    'CheckSupplierDefaultsValidity' => 'CheckSupplierDefaultsValidity',
    'CheckSupplierDefaultsValidityResponse' => 'CheckSupplierDefaultsValidityResponse',
    'GetGLDefaults' => 'GetGLDefaults',
    'GetGLDefaultsResponse' => 'GetGLDefaultsResponse',
    'WSResult2OfGLDefaults' => 'WSResult2OfGLDefaults',
    'GLDefaults' => 'GLDefaults',
    'SaveGLDefaults' => 'SaveGLDefaults',
    'SaveGLDefaultsResponse' => 'SaveGLDefaultsResponse',
    'CheckGLDefaultsValidity' => 'CheckGLDefaultsValidity',
    'CheckGLDefaultsValidityResponse' => 'CheckGLDefaultsValidityResponse',
    'GetStockItemDefaults' => 'GetStockItemDefaults',
    'GetStockItemDefaultsResponse' => 'GetStockItemDefaultsResponse',
    'WSResult2OfStockItemDefaults' => 'WSResult2OfStockItemDefaults',
    'StockItemDefaults' => 'StockItemDefaults',
    'SaveStockItemDefaults' => 'SaveStockItemDefaults',
    'SaveStockItemDefaultsResponse' => 'SaveStockItemDefaultsResponse',
    'CheckStockItemDefaultsValidity' => 'CheckStockItemDefaultsValidity',
    'CheckStockItemDefaultsValidityResponse' => 'CheckStockItemDefaultsValidityResponse');

  /**
   * 
   * @param array $config A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'https://appdb.visor.ie/visor/production/dashboard/Integration/Integration_1_1.asmx?WSDL')
  {
    foreach(self::$classmap as $key => $value)
    {
      if(!isset($options['classmap'][$key]))
      {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param Login $parameters
   * @access public
   */
  public function Login(Login $parameters)
  {
    return $this->__soapCall('Login', array($parameters));
  }

  /**
   * 
   * @param GetGLAccountList $parameters
   * @access public
   */
  public function GetGLAccountList(GetGLAccountList $parameters)
  {
    return $this->__soapCall('GetGLAccountList', array($parameters));
  }

  /**
   * 
   * @param GetTaxCodeList $parameters
   * @access public
   */
  public function GetTaxCodeList(GetTaxCodeList $parameters)
  {
    return $this->__soapCall('GetTaxCodeList', array($parameters));
  }

  /**
   * 
   * @param GetCreditTermList $parameters
   * @access public
   */
  public function GetCreditTermList(GetCreditTermList $parameters)
  {
    return $this->__soapCall('GetCreditTermList', array($parameters));
  }

  /**
   * 
   * @param GetDepartmentList $parameters
   * @access public
   */
  public function GetDepartmentList(GetDepartmentList $parameters)
  {
    return $this->__soapCall('GetDepartmentList', array($parameters));
  }

  /**
   * 
   * @param GetActiveCustomerList $parameters
   * @access public
   */
  public function GetActiveCustomerList(GetActiveCustomerList $parameters)
  {
    return $this->__soapCall('GetActiveCustomerList', array($parameters));
  }

  /**
   * 
   * @param GetCustomer $parameters
   * @access public
   */
  public function GetCustomer(GetCustomer $parameters)
  {
    return $this->__soapCall('GetCustomer', array($parameters));
  }

  /**
   * 
   * @param UpdateCustomer $parameters
   * @access public
   */
  public function UpdateCustomer(UpdateCustomer $parameters)
  {
    return $this->__soapCall('UpdateCustomer', array($parameters));
  }

  /**
   * 
   * @param GetCustomersStatement $parameters
   * @access public
   */
  public function GetCustomersStatement(GetCustomersStatement $parameters)
  {
    return $this->__soapCall('GetCustomersStatement', array($parameters));
  }

  /**
   * 
   * @param GetNewCustomerFromDefaults $parameters
   * @access public
   */
  public function GetNewCustomerFromDefaults(GetNewCustomerFromDefaults $parameters)
  {
    return $this->__soapCall('GetNewCustomerFromDefaults', array($parameters));
  }

  /**
   * 
   * @param GetCustomerBalanceInformation $parameters
   * @access public
   */
  public function GetCustomerBalanceInformation(GetCustomerBalanceInformation $parameters)
  {
    return $this->__soapCall('GetCustomerBalanceInformation', array($parameters));
  }

  /**
   * 
   * @param GetActiveSupplierList $parameters
   * @access public
   */
  public function GetActiveSupplierList(GetActiveSupplierList $parameters)
  {
    return $this->__soapCall('GetActiveSupplierList', array($parameters));
  }

  /**
   * 
   * @param GetNewSupplierFromDefaults $parameters
   * @access public
   */
  public function GetNewSupplierFromDefaults(GetNewSupplierFromDefaults $parameters)
  {
    return $this->__soapCall('GetNewSupplierFromDefaults', array($parameters));
  }

  /**
   * 
   * @param UpdateSupplier $parameters
   * @access public
   */
  public function UpdateSupplier(UpdateSupplier $parameters)
  {
    return $this->__soapCall('UpdateSupplier', array($parameters));
  }

  /**
   * 
   * @param GetSupplier $parameters
   * @access public
   */
  public function GetSupplier(GetSupplier $parameters)
  {
    return $this->__soapCall('GetSupplier', array($parameters));
  }

  /**
   * 
   * @param GetSupplierBalanceInformation $parameters
   * @access public
   */
  public function GetSupplierBalanceInformation(GetSupplierBalanceInformation $parameters)
  {
    return $this->__soapCall('GetSupplierBalanceInformation', array($parameters));
  }

  /**
   * 
   * @param GetAccountBalanceInformation $parameters
   * @access public
   */
  public function GetAccountBalanceInformation(GetAccountBalanceInformation $parameters)
  {
    return $this->__soapCall('GetAccountBalanceInformation', array($parameters));
  }

  /**
   * 
   * @param GetStockItem $parameters
   * @access public
   */
  public function GetStockItem(GetStockItem $parameters)
  {
    return $this->__soapCall('GetStockItem', array($parameters));
  }

  /**
   * 
   * @param GetNewStockItemFromDefaults $parameters
   * @access public
   */
  public function GetNewStockItemFromDefaults(GetNewStockItemFromDefaults $parameters)
  {
    return $this->__soapCall('GetNewStockItemFromDefaults', array($parameters));
  }

  /**
   * 
   * @param SaveStockItem $parameters
   * @access public
   */
  public function SaveStockItem(SaveStockItem $parameters)
  {
    return $this->__soapCall('SaveStockItem', array($parameters));
  }

  /**
   * 
   * @param GetStockItemList $parameters
   * @access public
   */
  public function GetStockItemList(GetStockItemList $parameters)
  {
    return $this->__soapCall('GetStockItemList', array($parameters));
  }

  /**
   * 
   * @param GetActiveStockItemList $parameters
   * @access public
   */
  public function GetActiveStockItemList(GetActiveStockItemList $parameters)
  {
    return $this->__soapCall('GetActiveStockItemList', array($parameters));
  }

  /**
   * 
   * @param GetInactiveStockItemList $parameters
   * @access public
   */
  public function GetInactiveStockItemList(GetInactiveStockItemList $parameters)
  {
    return $this->__soapCall('GetInactiveStockItemList', array($parameters));
  }

  /**
   * 
   * @param GetAllActiveStockInformation $parameters
   * @access public
   */
  public function GetAllActiveStockInformation(GetAllActiveStockInformation $parameters)
  {
    return $this->__soapCall('GetAllActiveStockInformation', array($parameters));
  }

  /**
   * 
   * @param GetStockItemLocationStatus $parameters
   * @access public
   */
  public function GetStockItemLocationStatus(GetStockItemLocationStatus $parameters)
  {
    return $this->__soapCall('GetStockItemLocationStatus', array($parameters));
  }

  /**
   * 
   * @param GetOrder $parameters
   * @access public
   */
  public function GetOrder(GetOrder $parameters)
  {
    return $this->__soapCall('GetOrder', array($parameters));
  }

  /**
   * 
   * @param GetNewSalesOrder $parameters
   * @access public
   */
  public function GetNewSalesOrder(GetNewSalesOrder $parameters)
  {
    return $this->__soapCall('GetNewSalesOrder', array($parameters));
  }

  /**
   * 
   * @param GetNewPurchasesOrder $parameters
   * @access public
   */
  public function GetNewPurchasesOrder(GetNewPurchasesOrder $parameters)
  {
    return $this->__soapCall('GetNewPurchasesOrder', array($parameters));
  }

  /**
   * 
   * @param SaveOrder $parameters
   * @access public
   */
  public function SaveOrder(SaveOrder $parameters)
  {
    return $this->__soapCall('SaveOrder', array($parameters));
  }

  /**
   * 
   * @param GetNewDeliveryLine $parameters
   * @access public
   */
  public function GetNewDeliveryLine(GetNewDeliveryLine $parameters)
  {
    return $this->__soapCall('GetNewDeliveryLine', array($parameters));
  }

  /**
   * 
   * @param DeliverOrderLines $parameters
   * @access public
   */
  public function DeliverOrderLines(DeliverOrderLines $parameters)
  {
    return $this->__soapCall('DeliverOrderLines', array($parameters));
  }

  /**
   * 
   * @param GetInvoiceFromOrder $parameters
   * @access public
   */
  public function GetInvoiceFromOrder(GetInvoiceFromOrder $parameters)
  {
    return $this->__soapCall('GetInvoiceFromOrder', array($parameters));
  }

  /**
   * 
   * @param GetOrdersByExternalReference $parameters
   * @access public
   */
  public function GetOrdersByExternalReference(GetOrdersByExternalReference $parameters)
  {
    return $this->__soapCall('GetOrdersByExternalReference', array($parameters));
  }

  /**
   * 
   * @param GetOrdersByCustomerCode $parameters
   * @access public
   */
  public function GetOrdersByCustomerCode(GetOrdersByCustomerCode $parameters)
  {
    return $this->__soapCall('GetOrdersByCustomerCode', array($parameters));
  }

  /**
   * 
   * @param CreateBatchSalesInvoice $parameters
   * @access public
   */
  public function CreateBatchSalesInvoice(CreateBatchSalesInvoice $parameters)
  {
    return $this->__soapCall('CreateBatchSalesInvoice', array($parameters));
  }

  /**
   * 
   * @param CreateBatchSalesCreditNote $parameters
   * @access public
   */
  public function CreateBatchSalesCreditNote(CreateBatchSalesCreditNote $parameters)
  {
    return $this->__soapCall('CreateBatchSalesCreditNote', array($parameters));
  }

  /**
   * 
   * @param CreateBatchPurchasesInvoice $parameters
   * @access public
   */
  public function CreateBatchPurchasesInvoice(CreateBatchPurchasesInvoice $parameters)
  {
    return $this->__soapCall('CreateBatchPurchasesInvoice', array($parameters));
  }

  /**
   * 
   * @param CreateBatchPurchasesDebitNote $parameters
   * @access public
   */
  public function CreateBatchPurchasesDebitNote(CreateBatchPurchasesDebitNote $parameters)
  {
    return $this->__soapCall('CreateBatchPurchasesDebitNote', array($parameters));
  }

  /**
   * 
   * @param GetNewBatchSalesInvoice $parameters
   * @access public
   */
  public function GetNewBatchSalesInvoice(GetNewBatchSalesInvoice $parameters)
  {
    return $this->__soapCall('GetNewBatchSalesInvoice', array($parameters));
  }

  /**
   * 
   * @param GetNewBatchSalesCreditNote $parameters
   * @access public
   */
  public function GetNewBatchSalesCreditNote(GetNewBatchSalesCreditNote $parameters)
  {
    return $this->__soapCall('GetNewBatchSalesCreditNote', array($parameters));
  }

  /**
   * 
   * @param GetNewBatchPurchasesInvoice $parameters
   * @access public
   */
  public function GetNewBatchPurchasesInvoice(GetNewBatchPurchasesInvoice $parameters)
  {
    return $this->__soapCall('GetNewBatchPurchasesInvoice', array($parameters));
  }

  /**
   * 
   * @param GetNewBatchPurchasesDebitNote $parameters
   * @access public
   */
  public function GetNewBatchPurchasesDebitNote(GetNewBatchPurchasesDebitNote $parameters)
  {
    return $this->__soapCall('GetNewBatchPurchasesDebitNote', array($parameters));
  }

  /**
   * 
   * @param GetInvoice $parameters
   * @access public
   */
  public function GetInvoice(GetInvoice $parameters)
  {
    return $this->__soapCall('GetInvoice', array($parameters));
  }

  /**
   * 
   * @param GetNewSalesInvoice $parameters
   * @access public
   */
  public function GetNewSalesInvoice(GetNewSalesInvoice $parameters)
  {
    return $this->__soapCall('GetNewSalesInvoice', array($parameters));
  }

  /**
   * 
   * @param GetNewSalesInvoices $parameters
   * @access public
   */
  public function GetNewSalesInvoices(GetNewSalesInvoices $parameters)
  {
    return $this->__soapCall('GetNewSalesInvoices', array($parameters));
  }

  /**
   * 
   * @param GetNewPurchasesInvoice $parameters
   * @access public
   */
  public function GetNewPurchasesInvoice(GetNewPurchasesInvoice $parameters)
  {
    return $this->__soapCall('GetNewPurchasesInvoice', array($parameters));
  }

  /**
   * 
   * @param GetNewPurchasesInvoices $parameters
   * @access public
   */
  public function GetNewPurchasesInvoices(GetNewPurchasesInvoices $parameters)
  {
    return $this->__soapCall('GetNewPurchasesInvoices', array($parameters));
  }

  /**
   * 
   * @param SaveInvoice $parameters
   * @access public
   */
  public function SaveInvoice(SaveInvoice $parameters)
  {
    return $this->__soapCall('SaveInvoice', array($parameters));
  }

  /**
   * 
   * @param SaveInvoiceGetBackInvoiceID $parameters
   * @access public
   */
  public function SaveInvoiceGetBackInvoiceID(SaveInvoiceGetBackInvoiceID $parameters)
  {
    return $this->__soapCall('SaveInvoiceGetBackInvoiceID', array($parameters));
  }

  /**
   * 
   * @param SaveInvoiceSpecifyCostGetBackInvoiceID $parameters
   * @access public
   */
  public function SaveInvoiceSpecifyCostGetBackInvoiceID(SaveInvoiceSpecifyCostGetBackInvoiceID $parameters)
  {
    return $this->__soapCall('SaveInvoiceSpecifyCostGetBackInvoiceID', array($parameters));
  }

  /**
   * 
   * @param CreateInvoicesGetBackInvoiceIDs $parameters
   * @access public
   */
  public function CreateInvoicesGetBackInvoiceIDs(CreateInvoicesGetBackInvoiceIDs $parameters)
  {
    return $this->__soapCall('CreateInvoicesGetBackInvoiceIDs', array($parameters));
  }

  /**
   * 
   * @param CreateInvoicesSpecifyCostGetBackInvoiceIDs $parameters
   * @access public
   */
  public function CreateInvoicesSpecifyCostGetBackInvoiceIDs(CreateInvoicesSpecifyCostGetBackInvoiceIDs $parameters)
  {
    return $this->__soapCall('CreateInvoicesSpecifyCostGetBackInvoiceIDs', array($parameters));
  }

  /**
   * 
   * @param CreateCreditNotesGetBackCreditNoteIDs $parameters
   * @access public
   */
  public function CreateCreditNotesGetBackCreditNoteIDs(CreateCreditNotesGetBackCreditNoteIDs $parameters)
  {
    return $this->__soapCall('CreateCreditNotesGetBackCreditNoteIDs', array($parameters));
  }

  /**
   * 
   * @param CreateCreditNotesSpecifyCostGetBackCreditNoteIDs $parameters
   * @access public
   */
  public function CreateCreditNotesSpecifyCostGetBackCreditNoteIDs(CreateCreditNotesSpecifyCostGetBackCreditNoteIDs $parameters)
  {
    return $this->__soapCall('CreateCreditNotesSpecifyCostGetBackCreditNoteIDs', array($parameters));
  }

  /**
   * 
   * @param PostInvoice $parameters
   * @access public
   */
  public function PostInvoice(PostInvoice $parameters)
  {
    return $this->__soapCall('PostInvoice', array($parameters));
  }

  /**
   * 
   * @param PostInvoiceGetBackTransactionID $parameters
   * @access public
   */
  public function PostInvoiceGetBackTransactionID(PostInvoiceGetBackTransactionID $parameters)
  {
    return $this->__soapCall('PostInvoiceGetBackTransactionID', array($parameters));
  }

  /**
   * 
   * @param PostInvoicesGetBackTransactionIDs $parameters
   * @access public
   */
  public function PostInvoicesGetBackTransactionIDs(PostInvoicesGetBackTransactionIDs $parameters)
  {
    return $this->__soapCall('PostInvoicesGetBackTransactionIDs', array($parameters));
  }

  /**
   * 
   * @param GetInvoicesByExternalReference $parameters
   * @access public
   */
  public function GetInvoicesByExternalReference(GetInvoicesByExternalReference $parameters)
  {
    return $this->__soapCall('GetInvoicesByExternalReference', array($parameters));
  }

  /**
   * 
   * @param GetInvoicesByCustomerCode $parameters
   * @access public
   */
  public function GetInvoicesByCustomerCode(GetInvoicesByCustomerCode $parameters)
  {
    return $this->__soapCall('GetInvoicesByCustomerCode', array($parameters));
  }

  /**
   * 
   * @param GetInvoicesBySupplierCode $parameters
   * @access public
   */
  public function GetInvoicesBySupplierCode(GetInvoicesBySupplierCode $parameters)
  {
    return $this->__soapCall('GetInvoicesBySupplierCode', array($parameters));
  }

  /**
   * 
   * @param GetCreditNote $parameters
   * @access public
   */
  public function GetCreditNote(GetCreditNote $parameters)
  {
    return $this->__soapCall('GetCreditNote', array($parameters));
  }

  /**
   * 
   * @param GetNewSalesCreditNote $parameters
   * @access public
   */
  public function GetNewSalesCreditNote(GetNewSalesCreditNote $parameters)
  {
    return $this->__soapCall('GetNewSalesCreditNote', array($parameters));
  }

  /**
   * 
   * @param GetNewSalesCreditNotes $parameters
   * @access public
   */
  public function GetNewSalesCreditNotes(GetNewSalesCreditNotes $parameters)
  {
    return $this->__soapCall('GetNewSalesCreditNotes', array($parameters));
  }

  /**
   * 
   * @param GetNewPurchasesDebitNote $parameters
   * @access public
   */
  public function GetNewPurchasesDebitNote(GetNewPurchasesDebitNote $parameters)
  {
    return $this->__soapCall('GetNewPurchasesDebitNote', array($parameters));
  }

  /**
   * 
   * @param SaveCreditNote $parameters
   * @access public
   */
  public function SaveCreditNote(SaveCreditNote $parameters)
  {
    return $this->__soapCall('SaveCreditNote', array($parameters));
  }

  /**
   * 
   * @param SaveCreditNoteSpecifyCostGetBackCreditNoteID $parameters
   * @access public
   */
  public function SaveCreditNoteSpecifyCostGetBackCreditNoteID(SaveCreditNoteSpecifyCostGetBackCreditNoteID $parameters)
  {
    return $this->__soapCall('SaveCreditNoteSpecifyCostGetBackCreditNoteID', array($parameters));
  }

  /**
   * 
   * @param PostCreditNote $parameters
   * @access public
   */
  public function PostCreditNote(PostCreditNote $parameters)
  {
    return $this->__soapCall('PostCreditNote', array($parameters));
  }

  /**
   * 
   * @param PostCreditNoteGetBackTransactionID $parameters
   * @access public
   */
  public function PostCreditNoteGetBackTransactionID(PostCreditNoteGetBackTransactionID $parameters)
  {
    return $this->__soapCall('PostCreditNoteGetBackTransactionID', array($parameters));
  }

  /**
   * 
   * @param PostCreditNotesGetBackTransactionIDs $parameters
   * @access public
   */
  public function PostCreditNotesGetBackTransactionIDs(PostCreditNotesGetBackTransactionIDs $parameters)
  {
    return $this->__soapCall('PostCreditNotesGetBackTransactionIDs', array($parameters));
  }

  /**
   * 
   * @param GetCreditNotesByExternalReference $parameters
   * @access public
   */
  public function GetCreditNotesByExternalReference(GetCreditNotesByExternalReference $parameters)
  {
    return $this->__soapCall('GetCreditNotesByExternalReference', array($parameters));
  }

  /**
   * 
   * @param GetCreditNotesByCustomerCode $parameters
   * @access public
   */
  public function GetCreditNotesByCustomerCode(GetCreditNotesByCustomerCode $parameters)
  {
    return $this->__soapCall('GetCreditNotesByCustomerCode', array($parameters));
  }

  /**
   * 
   * @param GetTransaction $parameters
   * @access public
   */
  public function GetTransaction(GetTransaction $parameters)
  {
    return $this->__soapCall('GetTransaction', array($parameters));
  }

  /**
   * 
   * @param GetTransactionByInvoiceID $parameters
   * @access public
   */
  public function GetTransactionByInvoiceID(GetTransactionByInvoiceID $parameters)
  {
    return $this->__soapCall('GetTransactionByInvoiceID', array($parameters));
  }

  /**
   * 
   * @param AllocateTransactions $parameters
   * @access public
   */
  public function AllocateTransactions(AllocateTransactions $parameters)
  {
    return $this->__soapCall('AllocateTransactions', array($parameters));
  }

  /**
   * 
   * @param AllocateTransactionsWithDiscount $parameters
   * @access public
   */
  public function AllocateTransactionsWithDiscount(AllocateTransactionsWithDiscount $parameters)
  {
    return $this->__soapCall('AllocateTransactionsWithDiscount', array($parameters));
  }

  /**
   * 
   * @param CreateGeneralJournal $parameters
   * @access public
   */
  public function CreateGeneralJournal(CreateGeneralJournal $parameters)
  {
    return $this->__soapCall('CreateGeneralJournal', array($parameters));
  }

  /**
   * 
   * @param GetItemGroupList $parameters
   * @access public
   */
  public function GetItemGroupList(GetItemGroupList $parameters)
  {
    return $this->__soapCall('GetItemGroupList', array($parameters));
  }

  /**
   * 
   * @param GetStockItemGroupList $parameters
   * @access public
   */
  public function GetStockItemGroupList(GetStockItemGroupList $parameters)
  {
    return $this->__soapCall('GetStockItemGroupList', array($parameters));
  }

  /**
   * 
   * @param SaveSalesReceipt $parameters
   * @access public
   */
  public function SaveSalesReceipt(SaveSalesReceipt $parameters)
  {
    return $this->__soapCall('SaveSalesReceipt', array($parameters));
  }

  /**
   * 
   * @param SaveSalesReceiptGetBackTransactionID $parameters
   * @access public
   */
  public function SaveSalesReceiptGetBackTransactionID(SaveSalesReceiptGetBackTransactionID $parameters)
  {
    return $this->__soapCall('SaveSalesReceiptGetBackTransactionID', array($parameters));
  }

  /**
   * 
   * @param SavePurchasePayment $parameters
   * @access public
   */
  public function SavePurchasePayment(SavePurchasePayment $parameters)
  {
    return $this->__soapCall('SavePurchasePayment', array($parameters));
  }

  /**
   * 
   * @param SavePurchasePaymentGetBackTransactionID $parameters
   * @access public
   */
  public function SavePurchasePaymentGetBackTransactionID(SavePurchasePaymentGetBackTransactionID $parameters)
  {
    return $this->__soapCall('SavePurchasePaymentGetBackTransactionID', array($parameters));
  }

  /**
   * 
   * @param GetDeliveryRouteList $parameters
   * @access public
   */
  public function GetDeliveryRouteList(GetDeliveryRouteList $parameters)
  {
    return $this->__soapCall('GetDeliveryRouteList', array($parameters));
  }

  /**
   * 
   * @param GetBankList $parameters
   * @access public
   */
  public function GetBankList(GetBankList $parameters)
  {
    return $this->__soapCall('GetBankList', array($parameters));
  }

  /**
   * 
   * @param GetCurrencyList $parameters
   * @access public
   */
  public function GetCurrencyList(GetCurrencyList $parameters)
  {
    return $this->__soapCall('GetCurrencyList', array($parameters));
  }

  /**
   * 
   * @param GetCurrencyExchangeRate $parameters
   * @access public
   */
  public function GetCurrencyExchangeRate(GetCurrencyExchangeRate $parameters)
  {
    return $this->__soapCall('GetCurrencyExchangeRate', array($parameters));
  }

  /**
   * 
   * @param GetPriceLists $parameters
   * @access public
   */
  public function GetPriceLists(GetPriceLists $parameters)
  {
    return $this->__soapCall('GetPriceLists', array($parameters));
  }

  /**
   * 
   * @param GetBankDefaults $parameters
   * @access public
   */
  public function GetBankDefaults(GetBankDefaults $parameters)
  {
    return $this->__soapCall('GetBankDefaults', array($parameters));
  }

  /**
   * 
   * @param SaveBankDefaults $parameters
   * @access public
   */
  public function SaveBankDefaults(SaveBankDefaults $parameters)
  {
    return $this->__soapCall('SaveBankDefaults', array($parameters));
  }

  /**
   * 
   * @param CheckBankDefaultsValidity $parameters
   * @access public
   */
  public function CheckBankDefaultsValidity(CheckBankDefaultsValidity $parameters)
  {
    return $this->__soapCall('CheckBankDefaultsValidity', array($parameters));
  }

  /**
   * 
   * @param GetCustomerDefaults $parameters
   * @access public
   */
  public function GetCustomerDefaults(GetCustomerDefaults $parameters)
  {
    return $this->__soapCall('GetCustomerDefaults', array($parameters));
  }

  /**
   * 
   * @param GetSupplierDefaults $parameters
   * @access public
   */
  public function GetSupplierDefaults(GetSupplierDefaults $parameters)
  {
    return $this->__soapCall('GetSupplierDefaults', array($parameters));
  }

  /**
   * 
   * @param SaveCustomerDefaults $parameters
   * @access public
   */
  public function SaveCustomerDefaults(SaveCustomerDefaults $parameters)
  {
    return $this->__soapCall('SaveCustomerDefaults', array($parameters));
  }

  /**
   * 
   * @param SaveSupplierDefaults $parameters
   * @access public
   */
  public function SaveSupplierDefaults(SaveSupplierDefaults $parameters)
  {
    return $this->__soapCall('SaveSupplierDefaults', array($parameters));
  }

  /**
   * 
   * @param CheckCustomerDefaultsValidity $parameters
   * @access public
   */
  public function CheckCustomerDefaultsValidity(CheckCustomerDefaultsValidity $parameters)
  {
    return $this->__soapCall('CheckCustomerDefaultsValidity', array($parameters));
  }

  /**
   * 
   * @param CheckSupplierDefaultsValidity $parameters
   * @access public
   */
  public function CheckSupplierDefaultsValidity(CheckSupplierDefaultsValidity $parameters)
  {
    return $this->__soapCall('CheckSupplierDefaultsValidity', array($parameters));
  }

  /**
   * 
   * @param GetGLDefaults $parameters
   * @access public
   */
  public function GetGLDefaults(GetGLDefaults $parameters)
  {
    return $this->__soapCall('GetGLDefaults', array($parameters));
  }

  /**
   * 
   * @param SaveGLDefaults $parameters
   * @access public
   */
  public function SaveGLDefaults(SaveGLDefaults $parameters)
  {
    return $this->__soapCall('SaveGLDefaults', array($parameters));
  }

  /**
   * 
   * @param CheckGLDefaultsValidity $parameters
   * @access public
   */
  public function CheckGLDefaultsValidity(CheckGLDefaultsValidity $parameters)
  {
    return $this->__soapCall('CheckGLDefaultsValidity', array($parameters));
  }

  /**
   * 
   * @param GetStockItemDefaults $parameters
   * @access public
   */
  public function GetStockItemDefaults(GetStockItemDefaults $parameters)
  {
    return $this->__soapCall('GetStockItemDefaults', array($parameters));
  }

  /**
   * 
   * @param SaveStockItemDefaults $parameters
   * @access public
   */
  public function SaveStockItemDefaults(SaveStockItemDefaults $parameters)
  {
    return $this->__soapCall('SaveStockItemDefaults', array($parameters));
  }

  /**
   * 
   * @param CheckStockItemDefaultsValidity $parameters
   * @access public
   */
  public function CheckStockItemDefaultsValidity(CheckStockItemDefaultsValidity $parameters)
  {
    return $this->__soapCall('CheckStockItemDefaultsValidity', array($parameters));
  }

}
