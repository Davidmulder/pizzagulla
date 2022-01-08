<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
    <link href="uploadify.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="swfobject.js"></script>
    <script type="text/javascript" src="jquery.uploadify.v2.1.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('#file_upload').uploadify({
        'uploader'  : 'uploadify.swf',
        'script'    : 'uploadify.php',
        'cancelImg' : 'cancel.png',
        'folder'    : 'uploads',
        'auto'      : true
      });
    });
    </script>

</head>

<body>
<form>
    <input id="file_upload" name="file_upload" type="file"  width="120" height="30"/>
</form>


<style type="text/css">
        #custom-demo .uploadifyQueueItem {
  background-color: #FFFFFF;
  border: none;
  border-bottom: 1px solid #E5E5E5;
  font: 11px Verdana, Geneva, sans-serif;
  height: 50px;
  margin-top: 0;
  padding: 10px;
  width: 350px;
}
#custom-demo .uploadifyError {
  background-color: #FDE5DD !important;
  border: none !important;
  border-bottom: 1px solid #FBCBBC !important;
}
#custom-demo .uploadifyQueueItem .cancel {
  float: right;
}
#custom-demo .uploadifyQueue .completed {
  color: #C5C5C5;
}
#custom-demo .uploadifyProgress {
  background-color: #E5E5E5;
  margin-top: 10px;
  width: 100%;
}
#custom-demo .uploadifyProgressBar {
  background-color: #0099FF;
  height: 3px;
  width: 1px;
}
#custom-demo #custom-queue {
  border: 1px solid #E5E5E5;
  height: 213px;
margin-bottom: 10px;
  width: 370px;
}				</style>
        <div class="demo-box">
		
		
 <script type="text/javascript">
				$(function() {
				$('#custom_file_upload').uploadify({
  'uploader'       : 'uploadify.swf',
  'script'         : 'uploadify.php',
  'cancelImg'      : 'cancel.png',
  'folder'         : 'uploads',
  'multi'          : true,
  'auto'           : true,
  'fileExt'        : '*.jpg;*.gif;*.png',
  'fileDesc'       : 'Image Files (.JPG, .GIF, .PNG)',
  'queueID'        : 'custom-queue',
  'queueSizeLimit' : 3,
  'simUploadLimit' : 3,
  'removeCompleted': false,
  'onSelectOnce'   : function(event,data) {
      $('#status-message').text(data.filesSelected + ' files have been added to the queue.');
    },
  'onAllComplete'  : function(event,data) {
      $('#status-message').text(data.filesUploaded + ' files uploaded, ' + data.errors + ' errors.');
    }
});				});
				</script>		
		
		
		
        <div id="status-message">Select some files to upload:</div>

<div class="uploadifyQueue" id="custom-queue"></div>
<input style="display: none;" id="custom_file_upload" name="Filedata" type="file" width="120" height="30">
<object style="visibility: visible;" id="custom_file_uploadUploader" data="uploadify.swf" type="application/x-shockwave-flash" width="120" height="30">
<param value="high" name="quality"><param value="opaque" name="wmode">
<param value="sameDomain" name="allowScriptAccess">
<param value="uploadifyID=custom_file_upload&amp;pagepath=uploadify.php&amp;folder=/uploads&amp;width=120&amp;height=30&amp;wmode=opaque&amp;method=POST&amp;queueSizeLimit=3&amp;simUploadLimit=3&amp;fileDesc=Image Files (.JPG, .GIF, .PNG)&amp;fileExt=*.jpg;*.gif;*.png&amp;multi=true&amp;auto=true&amp;fileDataName=Filedata&amp;queueID=custom-queue" name="flashvars"></object>        </div>
      </div>
      </div>
</div>



  
</body>
</html>
