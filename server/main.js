import { Meteor } from 'meteor/meteor';

SHS = new Mongo.Collection('shs'); // NEUE COLLECTION UM SHS Ergebnisse zu speichern.
Meteor.startup(() => {
  // code to run on server at startup
  Meteor.publish('shs.results', function() { // DIE PUBLIZIERFUNKTION UM DIE ERGENISSE AN DEN CLIENT ZU SENDEN ANHAND DER NUTZERID
    if(!this.userId) {
      return this.ready(); // FALLS NUTZER KEINE EINTRÄGE ODER NICHT ERLAUBT
    }
    return SHS.find({user_id: this.userId}, {date: SHS.date, result: SHS.result});
  });

// SERVERFUNKTIONEN UM CLIENT SPEICHERN ZU LASSEN

  Meteor.methods({
    'save_shs'({result, user}) {
      SHS.insert({user_id: user, result: result, date: new Date()})
      console.log('saved entry.');
    }
  });
});
