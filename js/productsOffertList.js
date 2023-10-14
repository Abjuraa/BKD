const columnLeft = document.querySelector('#colum1_products_offert');
const columnRight = document.querySelector('#colum2_products_offert');
let mitad = Math.floor(datosProdOfferts.length / 2);
let colum1Offert = datosProdOfferts.slice(0, mitad);
let colum2Offert = datosProdOfferts.slice(mitad);

function renderProductsOffert(columData, columHtml){

    columData.forEach((p) => {
        let template = `<div class="item">
    <div class="media">
        <div class="thumbnail object-cover">
            <a href="view/detailView.php?index=${p.id_prod}">
                <img src="${decode_img(base64_encode(p.img_producto_frente))}" alt="">
            </a>
        </div>
        <div class="hoverable">
            <ul>
                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
            </ul>
        </div>
        <div class="discount circle flexcenter"><span>${p.oferta_producto}</span></div>
    </div>
    <div class="content">
        <h3 class="main-links"><a href="view/detailView.php?index=${p.id_prod}">${p.nombre_producto}</a></h3>
        <div class="rating">
            <div class="stars"></div>
            <span class="mini-text">${p.producto_comentario.split(";").length}</span>
        </div>
        <div class="price">
            <span class="current">${USDollar.format(p.precio_producto - ((p.oferta_producto * p.precio_producto)) /100)}</span>
            <span class="normal mini-text">${ p.precio_producto}</span>
        </div>
        <div class="mini-text">
            <p>${p.producto_vendido} Vendido</p>
            <p>Envio Gratis</p>
        </div>
    </div>
    </div>`;
    columHtml.appenChild(template);
    })

}
renderProductsOffert(colum1Offert, columnLeft);
