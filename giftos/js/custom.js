// Products
document.addEventListener("DOMContentLoaded", function() {
    const storeName = "Daraz";
    let allProducts = [];

    fetch(`php/products_fetch.php?storeName=${encodeURIComponent(storeName)}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
                return;
            }

            allProducts = data.products;

            const pageType = document.querySelector('body').dataset.pageType;

            if (pageType === '1') {
                renderProducts(allProducts.slice(0, 8));
            } else {
                renderProducts(allProducts);
            }
        });
        fetch(`php/store_data.php?storeName=${encodeURIComponent(storeName)}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(data.error);
            } else {
                document.getElementById('previewLogo').src = data.logo;
            }
        })
    .catch(error => {
        console.error('Error fetching store data:', error);
    });
});

function renderProducts(products) {

    const list = document.querySelector('.productList');
        list.innerHTML = '';
        if (products.length === 0) {
            list.innerHTML = 'No products found.';
        } else {
            products.forEach(product => {
                let card = document.createElement('div');
                card.classList.add('col-sm-6', 'col-md-4', 'col-lg-3');
                card.innerHTML = `
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="${product.image}" alt="${product.name}">
                            </div>
                            <div class="detail-box">
                                <h6>${product.name}</h6>
                                <h6>
                                    Price <span>$${product.price}</span>
                                </h6>
                            </div>
                            ${product.isNew === 'New' && '<div class="new"><span>New</span></div>'} 
                             
                        </a>
                    </div>
                `;
                list.appendChild(card);
            });
        }
}

// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// owl carousel 
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 6
        }
    }
});
