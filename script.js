const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", window.scrollY >0);
});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};

window.onscroll = () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('open');
};

const sr = ScrollReveal ({
    distance:'60px',
    duration:2500,
    delay:400,
    reset:true
})

sr.reveal('.home-text',{delay:200, origin:'top'});
sr.reveal('.home-image',{delay:300, origin:'top'});
sr.reveal('.products',{delay:200, origin:'top'});


const product=[
    {
           
        
        
    }
]

 const categories = [...new Set(product.map((item)=> {return item}))]

 document.getElementById('searchBar').addEventListener('keyup', (e)=>{
    const searchData = e.target.value.toLower();
    const filterData = categories.filter((item)=>{
        return(
            item.title.toLocaleLowerCase().includes(searchData)
        )
    })
    displayItem(filterData)
 });

 const displayItem = (items)=>{
    document.getElementById('pdf-upload').innerHTML=items.map((item)=>{
        var{UnitName}=item;
        return(
        )
    }).join('')
 };
 displayItem(categories);
