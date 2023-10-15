const filaRandomHtml = document.querySelector('#rowRandom');

function renderProductsRandom(filaRandomParent, filaData){

    filaData.forEach(random => {
        let templateIndexPreview = `
        <div class="item">
            <div class="media">
                <div class="thumbnail object-cover">
                    <a href="view/detailView.php?index=${random.id_prod}">
                        <img src="${decode_img(random.img_producto_frente)}" alt="">
                    </a>
                </div>
                <div class="hoverable">
                    <ul>
                        <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                        <li><a href="#"><i class="ri-eye-line"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="content-text">
                <div class="rating ratingRandom">
                    <div class="stars"></div>
                    <span class="mini-text">${'(' + random.producto_comentario.split(";").length + ') Valoraciones'}</span>
                </div>
                <div class="nameProductContent"><h3><a class="nameCardProduct" href="view/detailView.php?index=${random.id_prod}">${random.nombre_producto}</a></h3></div>
                <div class="price priceRandom">
                    <span class="current">${USDollar.format(random.precio_producto)}</span>
                </div>
            </div>
        </div>`;

    filaRandomParent.innerHTML += templateIndexPreview;
    });
}
renderProductsRandom(filaRandomHtml, datosProdRandom);

console.log(datosProdRandom);