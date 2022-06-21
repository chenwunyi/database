$(document).ready( function () {
    $('#table').DataTable({
        "processing": true, // 顯示當前資料處理狀態資訊
        "serverSide": false, // 透過Server端處理分頁…等
        //"stateSave": true, // 預設為false 在頁面刷新時，是否要保存當前表格資料與狀態
        //"autoWidth": false, // 預設為true　設置是否要自動調整表格寬度(false代表不要自適應)　　　　
        "scrollCollapse": true, // 預設為false 是否開始滾軸功能控制X、Y軸
        "scrollY": "200px", // 若有設置為Y軸(垂直)最大高度
        "dom": 'lrtip',// 設置搜尋div、頁碼div...等基本位置/外觀..等，詳細可看官網
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/zh_Hant.json" 
         }


    }); 
} );

$(document).ready( function () {
    $.ajax({  
        url: "delivery.php",  
        type: "post",
        async:false,
        dataType: "json",
        success: function(data){
            for(let i=0;i<data.length;i++){
                $('table').append(
                    "<tr>"+
                    "<td>"+data[i].package.id+"</td>"+
                    "<td>"+data[i].package.customer_id+"</td>"+ 
                    "<td>"+data[i].package.receivername+"</td>"+
                    "<td>"+data[i].package.receiverphone+"</td>"+
                    "<td>"+data[i].locate_record.truck+"</td>"+
                    "<td>"+data[i].time_record.truck+"</td>"+
                    "</tr>"
                )
            }
        } 
    });  
});
$('tbody').append();