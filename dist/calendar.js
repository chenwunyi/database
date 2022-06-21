$('#date1').datetimepicker({
    date:null, 
    format: 'YYYY-MM-DD',
    locale: moment.locale('zh-tw'), 
    daysOfWeekDisabled: [0, 6], //隱藏六日
    minDate: moment().add(-181,'days'), 
    maxDate: moment().add(0,'days'), //從今天到2022年底
    disabledDates:
      [ 
        '2022-09-09',      
        '2022-10-10' //放假日期
              
      ]
    });
    
$('#date2').datetimepicker({
    date:null, 
    format: 'YYYY-MM-DD', 
    locale: moment.locale('zh-tw'), 
    daysOfWeekDisabled: [0, 6], //隱藏六日
    minDate: moment().add(1,'days'), 
    maxDate: moment().add(195,'days'), //從今天到2022年底
    disabledDates:
      [
         '2022-09-09',      
        '2022-10-10' //放假日期
      ]
    });
    
    

function search(){
    let starttime=document.getElementById("starttime").value;
    //let endtime=document.getElementById("endtime").value;
    alert(starttime);
    //alert(endtime);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("tbody").innerHTML = this.responseText;

    }
};

xmlhttp.open("GET","calendar.php?q="+starttime,true);
xmlhttp.send();
            
          
}