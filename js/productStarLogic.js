const productLinkId = document.querySelector('#product_id_link');
const imgProductStar = document.querySelector('#img_product_star');
const discountProductStar = document.querySelector('#discount_product_star');
const commentsProductStar = document.querySelector('#comments_star');
const nombreProductStar = document.querySelector('#nombre_producto_star');
const priceNormalStar = document.querySelector('#precio_normal_star');
const priceDiscountStar = document.querySelector('#precio_descuento_star');
const productStockStar = document.querySelector('#producto_stock_star');
const productSoldStar = document.querySelector('#producto_sold_star');


productLinkId.href += id_producto_star;
imgProductStar.src = decode_img(producto_img_star);
discountProductStar.innerHTML = producto_oferta_star + '%';
commentsProductStar.innerHTML = '(' + producto_comentario_star.split(';').length + ') Valoraciones';
nombreProductStar.href += id_producto_star;
nombreProductStar.innerHTML = producto_nombre_star;
priceNormalStar.innerHTML = USDollar.format(producto_precio_star);
priceDiscountStar.innerHTML = USDollar.format(producto_precio_star - ((producto_oferta_star * producto_precio_star)) /100);
productStockStar.innerHTML = producto_stock_star;
productSoldStar.innerHTML = producto_vendido_star;