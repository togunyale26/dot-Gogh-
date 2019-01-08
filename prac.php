<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>
  <h1>Hello, world!</h1>
  <!-- Row and Columns = sum of columns MUST EQUAL 12  -->
  <div class="row">
    <div class="col-sm-4 bg-warning text-center">.col-sm-4</div>
    <div class="col-sm-4 bg-success text-center">.col-sm-4</div>
    <div class="col-sm-4 bg-danger text-center">.col-sm-4</div>
  </div>
  <div class="row">
    <div class="col-sm-3 bg-warning text-center">.col-sm-3</div>
    <div class="col-sm-6 bg-success text-center">.col-sm-6</div>
    <div class="col-sm-3 bg-danger text-center">.col-sm-3</div>
  </div>
  <div class="row">
    <div class="col-sm-6 bg-warning text-center">.col-sm-6</div>
    <div class="col-sm-5 bg-success text-center">.col-sm-5</div>
    <div class="col-sm-1 bg-danger text-center">.col-sm-1</div>
  </div>
  <div class="row">
    <div class="col-sm-2 bg-warning text-center">.col-sm-2</div>
    <div class="col-sm-2 bg-success text-center">.col-sm-2</div>
    <div class="col-sm-2 bg-danger text-center">.col-sm-2</div>
    <div class="col-sm-2 bg-warning text-center">.col-sm-2</div>
    <div class="col-sm-2 bg-success text-center">.col-sm-2</div>
    <div class="col-sm-2 bg-danger text-center">.col-sm-2</div>
  </div>
  <div class="row">
    <div class="col-sm-3 bg-warning text-center">.col-sm-3</div>
    <div class="col-sm-9 bg-success text-center">.col-sm-9</div>
  </div>


  <div class="container">
    <h1>h1 Bootstrap <mark> heading (36px) mark  highligts word </mark> </h1>
    <h2>h2 Bootstrap heading (30px)</h2>
    <h3>h3 Bootstrap heading (24px)</h3>
    <h4>h4 Bootstrap heading (18px)</h4>
    <h5>h5 Bootstrap heading (14px)</h5>
    <h6>h6 Bootstrap heading (12px)</h6>
  </div>
  <div class="container">
    <h1>Lighter, Secondary Text</h1>
    <p>The small element is used to create a lighter, secondary text in any heading:</p>       
    <h1>h1 heading <small>secondary text</small></h1>
    <h2>h2 heading <small>secondary text</small></h2>
    <h3>h3 heading <small>secondary text</small></h3>
    <h4>h4 heading <small>secondary text</small></h4>
    <h5>h5 heading <small>secondary text</small></h5>
    <h6>h6 heading <small>secondary text</small></h6>
  </div>

  <div class="container">
    <h1>Blockquotes</h1>
    <p>The blockquote element is used to present content from another source:</p>
    <blockquote>
      <p>For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.</p>
      <footer>From WWF's website</footer>
    </blockquote>
  </div>

  <div class="container">
    <h1>Keyboard Inputs</h1>
    <p>To indicate input that is typically entered via the keyboard, use the kbd element:</p>
    <p>Use <kbd>ctrl + p</kbd> to open the Print dialog box.</p>
  </div>

  <div class="container">
    <h2>Alerts</h2>
    <p>The a element with class="close" and data-dismiss="alert" is used to close the alert box.</p>
    <p>The alert-dismissible class adds some extra padding to the close button.</p>
    <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>
    <div class="alert alert-info alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Info!</strong> This alert box could indicate a neutral informative change or action.
    </div>
    <div class="alert alert-warning alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
    </div>
    <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
    </div>
  </div>

  <div class="container">
    <h2>Contextual Colors</h2>
    <p>Use the contextual classes to provide "meaning through colors":</p>
    <p class="text-muted">This text is muted.</p>
    <p class="text-primary">This text is important.</p>
    <p class="text-success">This text indicates success.</p>
    <p class="text-info">This text represents some information.</p>
    <p class="text-warning">This text represents a warning.</p>
    <p class="text-danger">This text represents danger.</p>
  </div>
  <div class="container">
    <h2>Responsive Embed</h2>
    <p>Create a responsive video and scale it nicely to the parent element.</p>

    <h2>Aspect ratio 4:3</h2>
    <div class="embed-responsive embed-responsive-4by3">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
    </div>

    <h2>Aspect ratio 16:9</h2>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
    </div>
  </div>


  <div class="container">
    <div class="jumbotron">
      <h1>Bootstrap Tutorial</h1> 
      <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
      responsive, mobile-first projects on the web.</p> 
    </div>
    <p>This is some text.</p> 
    <p>This is another text.</p> 
  </div>

  <div class="jumbotron">
    <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>

  <div class="container">
    <p>This is some text.</p>      
    <p>This is another text.</p>      
  </div>

  <div class="container">
    <div class="page-header">
      <h1>Example Page Header</h1>      
    </div>
    <p>This is some text.</p>      
    <p>This is another text.</p>      
  </div>

  <div class="container">
    <h2>Well</h2>
    <div class="well bg-success">Basic Well</div>
  </div>





  <!-- Optional JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>