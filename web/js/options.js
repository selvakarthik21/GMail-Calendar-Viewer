var CLIENT_ID = '907329357581-hctqd8ff7boa8359o3dafhsqdnf6n1h9.apps.googleusercontent.com';
var API_KEY = 'AIzaSyAiuXFj86PK2o2ryNg_TZSxhGgcMQLNmdE';
var SCOPES = 'https://www.googleapis.com/auth/calendar.readonly';
// Array of API discovery doc URLs for APIs used by the quickstart
var DISCOVERY_DOCS = ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"];

var userId = 'me';

function handleClientLoad() {	
	gapi.client.setApiKey(API_KEY);
	window.setTimeout(checkAuth, 1);
}
function checkAuth() {
	gapi.auth.authorize({
		client_id: CLIENT_ID,
		scope: SCOPES,
		immediate: false
	}, updateSigninStatus);
}


function updateSigninStatus(authResult) {
	if(authResult && !authResult.error) {
		$('#authorize-button').hide();
		$("#signout-button").show().off('click').on('click',handleSignoutClick);
		$('#calendarListDiv').show();
		loadClient();
	} else {
		$('#authorize-button').show();
		$("#signout-button, #calendarListDiv").hide();
		$('#authorize-button').off('click').on('click', function(){
			handleAuthClick();
		});
	}
}
/**
 *  Sign in the user upon button click.
 */
function handleAuthClick() {
	gapi.auth.authorize({
		client_id: CLIENT_ID,
		scope: SCOPES,
		immediate: false
	}, updateSigninStatus);
}

/**
 *  Sign out the user upon button click.
 */
function handleSignoutClick(event) {
	gapi.auth.signOut();
	updateSigninStatus();
}

function loadCalendars(){
	
	
	
	
	console.log("calendar loaded");
	var request = gapi.client.calendar.calendarList.list();

    request.execute(function(resp){
            var calendars = resp.items;
            console.log(calendars);
    });
}