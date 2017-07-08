import { Meteor } from 'meteor/meteor';

// NEUE COLLECTIONS UM Ergebnisse zu speichern.
SHS = new Mongo.Collection('shs'); 
PWB = new Mongo.Collection('pwb');
SWLS = new Mongo.Collection('swls');
LIFE_ART = new Mongo.Collection('life_art');

Meteor.startup(() => {
  // code to run on server at startup
  Meteor.publish('shs.results', function() { // DIE PUBLIZIERFUNKTION UM DIE ERGENISSE AN DEN CLIENT ZU SENDEN ANHAND DER NUTZERID
    if(!this.userId) {
      return this.ready(); // FALLS NUTZER KEINE EINTRÄGE ODER NICHT ERLAUBT
    }
    return SHS.find({user_id: this.userId}, {date: SHS.date, result: SHS.result});
  }),

  Meteor.publish('swls.results', function() { // DIE PUBLIZIERFUNKTION UM DIE ERGENISSE AN DEN CLIENT ZU SENDEN ANHAND DER NUTZERID
    if(!this.userId) {
      return this.ready(); // FALLS NUTZER KEINE EINTRÄGE ODER NICHT ERLAUBT
    }
    return SWLS.find({user_id: this.userId}, {date: SWLS.date, result: SWLS.result});
  }),

 Meteor.publish('pwb.results', function() { // DIE PUBLIZIERFUNKTION UM DIE ERGENISSE AN DEN CLIENT ZU SENDEN ANHAND DER NUTZERID
    if(!this.userId) {
      return this.ready(); // FALLS NUTZER KEINE EINTRÄGE ODER NICHT ERLAUBT
    }
    return PWB.find({user_id: this.userId}, {date: PWB.date, result: PWB.result});
  }),

  Meteor.publish('life_art.results', function() { // DIE PUBLIZIERFUNKTION UM DIE ERGENISSE AN DEN CLIENT ZU SENDEN ANHAND DER NUTZERID
    if(!this.userId) {
      return this.ready(); // FALLS NUTZER KEINE EINTRÄGE ODER NICHT ERLAUBT
    }
    return LIFE_ART.find({user_id: this.userId}, {date: LIFE_ART.date, result: LIFE_ART.result});
  });


// SERVERFUNKTIONEN UM CLIENT SPEICHERN ZU LASSEN

  Meteor.methods({
    'save_shs'({result, user}) {
      SHS.insert({user_id: user,  date: new Date(), result: result});
      console.log('saved entry.');
    },
    'save_pwb'({result, user}) {
      PWB.insert({user_id: user, date: new Date(), result: result});
      console.log('saved entry.');
    },
    'save_swls'({result, user}) {
      SWLS.insert({user_id: user, date: new Date(), result: result});
      console.log('saved entry.');
    },
    'save_life_art'({result, user}) {
      LIFE_ART.insert({user_id: user, date: new Date(), result: result});
      console.log('saved entry.');
    }
  });
});
