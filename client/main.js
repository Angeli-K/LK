import { Template } from 'meteor/templating';
import { ReactiveVar } from 'meteor/reactive-var';
import { Router } from 'meteor/iron:router';

import './main.html';
import './life_art.html';
import './pwb.html';
import './shs.html';
import './swls.html';

/**
* Routing
*/
Router.configure({
  layoutTemplate: 'mainLayout'
});

Router.route('/', {
  name: 'home',
  template: 'home'
});

Router.route('/pwb', {
    name: 'pwb',
    template: 'pwb'
});

Router.route('/shs', {
    name: 'shs',
    template: 'shs'
});

Router.route('/life_art', {
    name: 'life_art',
    template: 'life_art'
});

Router.route('/swls', {
    name: 'swls',
    template: 'swls'
});


/**
* Life Art Scala Events and helpers
*
*/
Template.life_art.events({
  'submit .life_art': function(event) {
    event.preventDefault();
    var form = $('.life_art').serializeArray();
    var result = {};
    form.forEach(function(obj) {
      result[obj.name] = parseInt(obj.value);
    });
    if(form.length == 30) {
      result['of'] = (result.life_art_1+result.life_art_2+result.life_art_3)/3;
      result['po'] = (result.life_art_4+result.life_art_5+result.life_art_6)/3;
      result['so'] = (result.life_art_7+result.life_art_8+result.life_art_9)/3;
      result['sk'] = (result.life_art_10+result.life_art_11+result.life_art_12)/3;
      result['sa'] = result.life_art_13;
      result['re'] = (result.life_art_14+result.life_art_15+result.life_art_16)/3;
      result['si'] = (result.life_art_17+result.life_art_19+result.life_art_20)/3;
      result['zi'] = (result.life_art_18+result.life_art_21)/2;
      result['ge'] = (result.life_art_22+result.life_art_23+result.life_art_24)/3;
      result['gs'] = (result.life_art_25+result.life_art_26+result.life_art_27)/3;
      result['ko'] = (result.life_art_28+result.life_art_29+result.life_art_30)/3;
      result['finished'] = true;
    } else {
      result['finished'] = false;
    }
    console.log(result);
  }
});

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
