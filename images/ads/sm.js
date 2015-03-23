function setIframe( uri) {
  ifrms = document.getElementsByTagName('iframe'); //(name);
  for (var i = 0; i < ifrms.length; i++) { 
    if (ifrms[i].name == "socialmedia_ad") {
    ifrms[i].setAttribute("src", uri+"&width="+ifrms[i].width+"&height="+ifrms[i].height);
    ifrms[i].style.border = "0";
    ifrms[i].scrolling = "no";
    }
  }
}

function dataLoadCallback(dataResponse) {
  if (dataResponse.hadError()) {
    alert("Error");
  } else {
    var viewerData = dataResponse.get(opensocial.DataRequest.PersonId.VIEWER).getData();
    var viewerID = viewerData.getField(opensocial.Person.Field.ID);
    var src = "http://ads.socialmedia.com/myspace/monetize.php?pubid=28eff3ba6346f469a7260b2aab4c2c0e&fb_sig_user="+ viewerID;
    setIframe( src);
  }
}

MYOS_TRACE = true; 
var os = opensocial.Container.get();
var dataReqObj = os.newDataRequest();
var viewerReq = os.newFetchPersonRequest(opensocial.DataRequest.PersonId.VIEWER);
dataReqObj.add(viewerReq);

dataReqObj.send(dataLoadCallback);
//document.write('<iframe name="socialmedia_ad" width=728 height=90 > </iframe>');