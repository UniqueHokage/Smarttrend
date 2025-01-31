function addToCart(id){ 
    console.log('add ' + id); 
    $.ajax({ 
        type: "POST", 
        url: "checkout.php", 
        dataType:"text", 
        data: {action: 'add', id: id}, 
        error: function() { 
            alert("Не смог"); 
        }, 
        success: function (response){ 
            alert('Добавили ' + id); 
        } 
    }); 
} 

function showMyCart(){ 
    console.log('show '); 
    $.ajax({ 
        type: "POST", 
        url: "checkout.php", 
        dataType:"text", 
        data: {action: 'show'}, 
        error: function() { 
            alert("Произошла ошибка при загрузке корзины"); 
        }, 
        success: function (response){ 
            $('#in-check').html(response); 
        } 
    }); 
} 

function delFromCart(id){ 
    console.log('del ' + id); 
    $.ajax({ 
        type: "POST", 
        url: "checkout.php", 
        dataType:"text", 
        data: {action: 'del', id: id}, 
        error: function() { 
            alert("Произошла ошибка при удалении товара" ); 
        }, 
        success: function (response){ 
            showMyCart(); 
            console.log(response); 
        } 
    }); 
} 

