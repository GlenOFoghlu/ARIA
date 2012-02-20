function breadcrumbs(){
  sURL = new String;
  bits = new Object;
  var x = 0;
  var stop = 0;
  var output = "&nbsp; &nbsp; &nbsp; <a href=\"/\">Home</a>  >  ";
  sURL = location.href;
  sURL = sURL.slice(8,sURL.length);
  chunkStart = sURL.indexOf("/");
  sURL = sURL.slice(chunkStart+1,sURL.length)
  while(!stop){
    chunkStart = sURL.indexOf("/");
    if (chunkStart != -1){
      bits[x] = sURL.slice(0,chunkStart)
      sURL = sURL.slice(chunkStart+1,sURL.length);
    }else{
      stop = 1;
    }
    x++;
  }
  for(var i in bits){
    output += "<a href=\"";
    for(y=1;y<x-i;y++){
      output += "../";
    }
    output += bits[i] + "/\">" + bits[i] + "</a>  >  ";
  }
  document.write(output + document.title);
}
function date ()
{
var d=new Date();
var weekday=new Array(7);
var month=new Array(7); 
weekday[0]="Sunday";
weekday[1]="Monday";
weekday[2]="Tuesday";
weekday[3]="Wednesday";
weekday[4]="Thursday";
weekday[5]="Friday";
weekday[6]="Saturday";

month[0]="January";
month[1]="February";
month[2]="March";
month[3]="April";
month[4]="May";
month[5]="June";
month[6]="July";
month[7]="August";
month[8]="September";
month[9]="October";
month[10]="November";
month[11]="December";

document.write("<span style='padding-left:30%'>"+d.getDate()+" / "+month[d.getMonth()]+ " / "+ d.getFullYear()+"</span>");

}
