/**
 * Copyright © IURCO and PRISMA. All rights reserved.
 */
/**
 * Makes Decidir Payment method available into the Checkout Payment step
 */
define([
    'uiComponent',
    'Magento_Checkout/js/model/payment/renderer-list'
], function (Component, rendererList) {
    'use strict';

    rendererList.push({
        type: 'decidir',
        component: 'Prisma_DecidirPromotions/js/view/payment/method-renderer/decidir-promotions-method'
    });

    return Component.extend({});
});
