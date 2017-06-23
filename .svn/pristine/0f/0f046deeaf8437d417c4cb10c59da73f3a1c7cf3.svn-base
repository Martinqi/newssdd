/**
 * Created by ZHC on 2017/5/14.
 */
$(document).ready(function () {
    let tbody=$('tbody');
    $('#sel').change(function () {
        let id=$('#sel').val();
        $.ajax({
            url:"glContentinfo.php",
            dataType:'json',
            data:{id:id},
            success:function (data) {
                tbody.html('');
                data.forEach(function (value,index) {
                    $('<tr>').html(`
                    <td>${value.id}</td>
                    <td>${value.title}</td>
                    <td>${value.content}</td>
                    <td>${value.time}</td>
                    <td><img src="${value.thumb}"></td>
                    <td>${value.cid}</td>
                    <td>${value.positionid}</td>
                   <td>               
                     <a href="delcontent.php?id=${value.id}">删除</a>
                     <a href="editcontent.php?id=${value.id}">编辑</a>
                    </td>
                    `).appendTo(tbody);
                })
            },
        })
    });
    $('#sel').triggerHandler('change');

})