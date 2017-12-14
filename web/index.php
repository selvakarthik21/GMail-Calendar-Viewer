<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">  
<meta http-equiv="Expires" content="Mon, 01 Jan 1990 12:00:00 GMT">
<!doctype html>
<html>
  <head>
    <title>Gmail API List Messages</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <style>
      iframe {
        width: 100%;
        border: 0;
        min-height: 80%;
        height: 600px;
        display: flex;
      }
      .loader {
		  border: 4px solid #f3f3f3;
		  border-radius: 50%;
		  border-top: 4px solid #3498db;
		  width: 30px;
		  height: 30px;
		  -webkit-animation: spin 2s linear infinite; /* Safari */
		  animation: spin 2s linear infinite;
		}
		
		/* Safari */
		@-webkit-keyframes spin {
		  0% { -webkit-transform: rotate(0deg); }
		  100% { -webkit-transform: rotate(360deg); }
		}
		
		@keyframes spin {
		  0% { transform: rotate(0deg); }
		  100% { transform: rotate(360deg); }
		}
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Google Calendar</h1>
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<div class="form-group" id="calendarListDiv" style="display:none;">
				  <label for="sel1">Available Calendars</label>
				  <select class="form-control" id="calendarList">
				  </select>
				</div>
			</div>
			<div class="col-sm-6 col-lg-9">
				<button id="authorize-button" class="btn btn-primary pull-right" style="display: none;">Sign In</button>
    			<button id="signout-button"   class="btn btn-primary pull-right" style="display: none;">Sign Out</button>
			</div>
		</div>
    	

    <script src="js/jquery-2.2.4.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/options.js"></script>
    <script src="https://apis.google.com/js/api.js?onload=handleClientLoad"></script>
  </body>
</html>