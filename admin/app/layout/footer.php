
        </div>
      </div>
  </div>

  <!-- <nav class="navbar-shopify navbar-expand">
    <a class="navbar-brand col-sm-2 bg-dark" href="#">Polished</a>

    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent2">
      <ul class="navbar-nav">
        <li class="col-lg-3 col-md-6 mb-2 col-sm-6"></li>
        <form class="form-inline">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0 col-4">
        <li class="nav-item dropdown">
          <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Muhammad Azamuddin
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="#">Action</a>
            <a class="dropdown-item " href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item " href="#">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav> --> 

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
  <script>


  let ctxArea = document.getElementById('sales')

  var dataArea = {
    labels: ["Jan", "Feb", "March", "April", "May", "June"],
    datasets: [{
      label: 'Sales',
      data: [20,10,40,50, 75,80],
      backgroundColor: '#6CCC64'
    }, {
      label: 'Add to Cart',
      data: [40,30,54,60,60,99],
      backgroundColor: '#FDD638'
    }]
  }

  var myAreaChart = new Chart(ctxArea, {
    type: 'line',
    data: dataArea
  })

  var ctxDoughnut = document.getElementById('top-sales-by-category')
  var myDoughnutChart = new Chart(ctxDoughnut, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [10,20,30,32,54],
        backgroundColor: ['indigo', 'blue', 'green', 'tan', 'lightgreen']
      }],
      labels: [ 'Footwear', 'Menswear', 'Bags', 'Sports', 'Gaming']
    }
  })


  </script>
  
</body>

</html>