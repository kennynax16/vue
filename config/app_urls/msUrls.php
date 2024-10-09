<?php
$MsURL = "https://api.moysklad.ru/api/remap/1.2/";
return [
    "agent" => "{$MsURL}entity/counterparty/",
    "agentMetadataAttributes" => "{$MsURL}entity/counterparty/metadata/attributes/",

    "bundle" => "{$MsURL}entity/bundle/",
    "bundleMetadataAttributes" => "{$MsURL}entity/bundle/metadata/attributes/",

    "cashin" => "{$MsURL}entity/cashin/",
    "cashout" => "{$MsURL}entity/cashout/",
    "companySettingsMetadata" => "{$MsURL}context/companysettings/metadata/",
    "counterpartyNotes" => "{$MsURL}entity/counterparty/{counterpartyId}/notes/",
    "currency" => "{$MsURL}entity/currency/",
    "customentity" => "{$MsURL}entity/customentity/",
    "customEntityMeta" => "{$MsURL}context/companysettings/metadata/customEntities/",
    "customerorder" => "{$MsURL}entity/customerorder/",
    "customerorderMetadataAttributes" => "{$MsURL}entity/customerorder/metadata/attributes/",
    "customerorderMetadataStates" => "{$MsURL}entity/customerorder/metadata/states/",

    "demand" => "{$MsURL}entity/demand/",
    "demandMetadataAttributes" => "{$MsURL}entity/demand/metadata/attributes/",
    
    "employee" => "{$MsURL}entity/employee/",
    "expenseitem" => "{$MsURL}entity/expenseitem/",

    "facturein" => "{$MsURL}entity/facturein/",
    "factureout" => "{$MsURL}entity/factureout/",

    "group" => "{$MsURL}entity/group/",

    "invoicein" => "{$MsURL}entity/invoicein/",
    "invoiceout" => "{$MsURL}entity/invoiceout/",

    "organization" => "{$MsURL}entity/organization/",
    "organizationAccount" => "{$MsURL}entity/organization/{organizationId}/accounts/",

    "paymentin" => "{$MsURL}entity/paymentin/",
    "paymentout" => "{$MsURL}entity/paymentout/",
    "pricetype" => "{$MsURL}context/companysettings/pricetype/",
    "product" => "{$MsURL}entity/product/",
    "productMetadataAttributes" => "{$MsURL}entity/product/metadata/attributes/",
    "project" =>"{$MsURL}entity/project/",
    "purchaseorder" =>"{$MsURL}entity/purchaseorder/",
    "purchasereturn" =>"{$MsURL}entity/purchasereturn/",
    

    "saleschannel" => "{$MsURL}entity/saleschannel/",
    "salesreturn" => "{$MsURL}entity/salesreturn/",
    "salesreturnMetadataAttributes" => "{$MsURL}entity/salesreturn/metadata/attributes/",
    "store" => "{$MsURL}entity/store/",
    "supply" => "{$MsURL}entity/supply/",

    "variant" => "{$MsURL}entity/variant/",


];