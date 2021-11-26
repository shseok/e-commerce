<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

    <title>E-commerce</title>
</head>

<body>
    <header>
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-baloo font-size-12 text-black-50 m-0">데이터베이스 6조</p>
            <div class="font-baloo font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">로그인</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist(0)</a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">E-Commerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#n   avbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-baloo">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">할인 중</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">분류</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">티켓<i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">리뷰</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">분류<i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comming Soon</a>
                        </li>
                    </ul>
                    <form action="#" class="font-size-14 font-baloo">
                        <a href="#" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main id="main-site">
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/Banner1.png" alt="Banner1">
                </div>
                <div class="item">
                    <img src="./assets/Banner2.png" alt="Banner2">
                </div>
                <div class="item">
                    <img src="./assets/Banner1.png" alt="Banner3">
                </div>
            </div>
        </section>
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-baloo font-size-20">Top Sale</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/2.png" alt="product2" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/3.png" alt="product3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더2</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/4.png" alt="product4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/5.png" alt="product5" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/6.png" alt="product6" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더2</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="special-price">
            <div class="container">
                <h4 class="font-baloo font-size-20">Special Price</h4>
                <div id="filters" class="button-group text-end font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">All Brand</button>
                    <button class="btn" data-filter=".Apple">Apple</button>
                    <button class="btn" data-filter=".Samsung">Samsung</button>
                    <button class="btn" data-filter=".Readmi">Readmi</button>
                </div>
                <div class="grid">
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width: 200px">
                            <div class="product font-baloo">
                                <a href="#"><img src="./assets/products/13.png" alt="product13" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Apple0</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Samsung border">
                        <div class="item py-2" style="width: 200px">
                            <div class="product font-baloo">
                                <a href="#"><img src="./assets/products/11.png" alt="product11" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Samsung Galaxy 10</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Readmi border">
                        <div class="item py-2" style="width: 200px">
                            <div class="product font-baloo">
                                <a href="#"><img src="./assets/products/3.png" alt="product33" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Readmi Note 7</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Apple border">
                        <div class="item py-2" style="width: 200px">
                            <div class="product font-baloo">
                                <a href="#"><img src="./assets/products/14.png" alt="product14" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Apple2</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Samsung border">
                        <div class="item py-2" style="width: 200px">
                            <div class="product font-baloo">
                                <a href="#"><img src="./assets/products/12.png" alt="product12" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Samsung Galaxy 12</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Readmi border">
                        <div class="item py-2" style="width: 200px">
                            <div class="product font-baloo">
                                <a href="#"><img src="./assets/products/5.png" alt="product5" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Readmi Note 8</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="banner_adds">
            <div class="container py-5 text-center">
                <img src="./assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
                <img src="./assets/banner2-cr-500x150.jpg" alt="banner2" class="img-fluid">
            </div>
        </section>
        <section id="new-items">
            <div class="container">
                <h4 class="font-baloo font-size-20">New Items</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item py-2 bg-light">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/2.png" alt="product2" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/3.png" alt="product3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더2</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/4.png" alt="product4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy 10</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/5.png" alt="product5" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                    <div class="item py-2 bg-light">
                        <div class="product font-baloo">
                            <a href="#"><img src="./assets/products/6.png" alt="product6" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>어나더2</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">카트에 담기</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blogs -> reviews -->
        <section id="blogs">
            <div class="container py-4">
                <h4 class="font-baloo font-size-20">Latest Blogs</h4>
                <hr>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="card border-0 font-baloo mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">
                                Upcoming Mobiles
                            </h5>
                            <img src="./assets/blog/blog1.jpg" alt=" cartimage" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Magni illo esse non at? Facilis harum quaerat vero quo, pariatur
                                minima.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-baloo mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">
                                Upcoming Mobiles
                            </h5>
                            <img src="./assets/blog/blog2.jpg" alt=" cartimage" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Magni illo esse non at? Facilis harum quaerat vero quo, pariatur
                                minima.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border-0 font-baloo mr-5" style="width: 18rem;">
                            <h5 class="card-title font-size-16">
                                Upcoming Mobiles
                            </h5>
                            <img src="./assets/blog/blog3.jpg" alt=" cartimage" class="card-img-top">
                            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Magni illo esse non at? Facilis harum quaerat vero quo, pariatur
                                minima.</p>
                            <a href="#" class="color-second text-left">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-baloo font-size-20">E-Commerce</h4>
                    <p class="font-size-14 font-baloo text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Numquam necessitatibus quasi eligendi, dignissimos error autem, iusto quae optio
                        exercitationem officia quibusdam molestias incidunt similique harum labore sequi natus, a
                        consequuntur?</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-baloo font-size-20">Newslatter</h4>
                    <form class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email *">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-baloo font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">Delivery Info</a>
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">Terms & Condition</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-baloo font-size-20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">Order History</a>
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">Wish List</a>
                        <a href="#" class="font-baloo font-size-14 text-white-50 pb-1">Newslatters</a>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <div class="cpyright text-center bg-dark text-white py-2">
        <p class="font-baloo font-size-14">&copy; Copyrights 2020. Designing By <a href="#" class="color-second">Daily
                Tuition</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./index.js"></script>

</body>

</html>