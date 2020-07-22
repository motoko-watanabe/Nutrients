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
            template: 'Haruta_Nutrients/cart/summary/calories'
        },
        getValue: function(quoteItem) {
            return quoteItem.name;
        },

        getTotalCalories: function (){
            var total = 0;

            for(let quoteItem of quote.getItems()){
                total = parseFloat(total) + parseFloat(quoteItem.product.nutrients_calories)*parseInt(quoteItem.qty);
                //alert(JSON.stringify(quoteItem));
            }
            return total;
        }
    });
});
