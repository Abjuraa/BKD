function renderProductsFilter(arrayProducts){
    arrayProducts.forEach(element => {
        console.log(element);
        let child = ` <div class="item">
        <div class="media">
            <div class="thumbnail object-cover">
                <a href="view/detailView.php?index=${element.id_prod}">
                    <img src="${decode_img(element.img_producto_frente)}" alt="">
                </a>
            </div>
            <div class="hoverable">
                <ul>
                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                </ul>
            </div>
            <div class="discount circle flexcenter"><span>${element.oferta_producto + '%'}</span></div>
        </div>
        <div class="content">
            <div class="rating">
                <div class="stars"></div>
                <span class="mini-text">${'(' + element.producto_comentario.split(";").length + ') Valoraciones'}</span>
            </div>
            <h3><a href="#">"view/detailView.php?index=${element.id_prod}">${element.nombre_producto}</a></h3>
            <div class="price">
                <span class="current">${USDollar.format(element.precio_producto - ((element.oferta_producto * element.precio_producto)) /100)}</span>
                <span class="normal mini-text">${ USDollar.format(element.precio_producto)}</span>
            </div>
        </div>
       </div>`;
     });
 };

