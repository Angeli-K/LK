import { Template } from 'meteor/templating';
import { ReactiveVar } from 'meteor/reactive-var';

import './main.html';


/**
* PWB Scala Events and helpers
*
*/
Template.pwb.events({
  'submit .pwb': function(event) {
    event.preventDefault();
    var form = $('.pwb').serializeArray();
    var result = {};
    form.forEach(function(obj) {
      result[obj.name] = parseInt(obj.value);
    });
    if(form.length == 18) {
      // @TODO Add calculation for pwb results
      result['autonomy'] = (result.pwb_8+result.pwb_4-result.pwb_1)/3;
      result['everyday_coping'] = (result.pwb_18+result.pwb_2-result.pwb_16)/3;
      result['personal_growth'] = (result.pwb_3+result.pwb_9-result.pwb_5)/3;
      result['positive_social_relations'] = (result.pwb_10-result.pwb_6-result.pwb_14)/3;
      result['meaning_of_life'] = (result.pwb_7-result.pwb_15-result.pwb_17)/3;
      result['self_acceptance'] = (result.pwb_12+result.pwb_13-result.pwb_11)/3;
      result['finished'] = true;
    } else {
      result['finished'] = false;
    }
    console.log(result);
    $('.pwb').trigger('reset');
  }
});

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
