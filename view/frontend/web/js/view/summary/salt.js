/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'Magento_Checkout/js/view/summary/abstract-total',
    'Magento_Checkout/js/model/quote'
], function (Component, quote) {
    'use strict';
    return Component.extend({
        defaults: {
            template: 'Haruta_Nutrients/cart/summary/salt'
        },
        getValue: function(quoteItem) {
            return quoteItem.name;
        },

        getTotalSalt: function (){
            var total = 0;

            for(let quoteItem of quote.getItems()){
                total = parseFloat(total) + parseFloat(quoteItem.product.nutrients_salt)*parseInt(quoteItem.qty);
            }
            return total;
        }
    });
});
