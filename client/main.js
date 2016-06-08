import { Template } from 'meteor/templating';
import { ReactiveVar } from 'meteor/reactive-var';

import './main.html';


/**
* SHS Scala Events and helpers
*
*/

Template.shs.events({
  'submit .shs': function(event) {
    event.preventDefault();
    var form = $('.shs').serializeArray();
    var result = {};
    form.forEach(function(obj) {
      result[obj.name] = parseInt(obj.value);
    });
    if(result.hasOwnProperty('shs_1') && result.hasOwnProperty('shs_2') && result.hasOwnProperty('shs_3') && result.hasOwnProperty('shs_4')) {
      result['shs_result'] = (result.shs_1+result.shs_2+result.shs_3-result.shs_4)/4;
      result['finished'] = true;
    } else {
      result['finished'] = false;
    }
    console.log(result);
    $('.shs').trigger('reset');
  }
});

/**
* SWLS Scala Events and helpers
*
*/
Template.swls.events({
  'submit .swls': function(event) {
    event.preventDefault();
    var form = $('.swls').serializeArray();
    var result = {};
    form.forEach(function(obj) {
      result[obj.name] = parseInt(obj.value);
    });
    if(result.hasOwnProperty('swls_1') && result.hasOwnProperty('swls_2') && result.hasOwnProperty('swls_3') && result.hasOwnProperty('swls_4') && result.hasOwnProperty('swls_5')) {
      result['swls_result'] = (result.swls_1+result.swls_2+result.swls_3+result.swls_4 +result.swls_5)/5;
      result['finished'] = true;
    } else {
      result['finished'] = false;
    }
    console.log(result);
  }
});
