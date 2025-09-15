<?php
  include('includes/functions.php');
  if(!isset($_SESSION['id']) && strpos($_SERVER["SCRIPT_FILENAME"], 'index.php') === false) {
    header("Location: index.php");
    exit();
  }
  page_header();
  nav_bar();
  $result = $conn->query("SELECT id, aim, perform, video, doc FROM `experiments`");
?>
  <style>
    body {
      background: linear-gradient(135deg, rgba(10, 35, 81, 0.95) 0%, rgba(0, 106, 78, 0.98) 100%);
    }
    /* Green */
    .view {
      color: #43d6f7;
    }  
  </style>
    <div class="body"></div>
    <!-- <div class="bg-light container-fluid pb-3 rounded-3" style="opacity: 0.8;"> -->
    <div class="d-flex mx-md-5 mx-0 mb-0 mb-md-5 flex-column h-100 bg-light rounded-3 shadow-lg p-4">
      <section class="pt-5 px-3">
        <div class="input-group mt-5">
            <i class="fas fa-search position-absolute top-50 start-0 translate-middle-y ms-2" style="z-index: 10;"></i>
            <input class="form-control py-2"onkeyup="myFunction()" style="padding-left: 40px; border-radius: 10px;" name="name" type="text" placeholder="Search..." required>
        </div>
        <div class="mt-3 accordion" id="accordionExample">
          <?php
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                $user_experiment_result = $conn->query("SELECT type, created_on FROM `user_experiments` WHERE user_id='".$_SESSION['id']."' AND experiment_id='".$row["id"]."'");
                $videoBadge = 'bg-light text-secondary';
                $videoStatus = 'You have not watched video yet';
                $expBadge = 'bg-light text-secondary';
                $expStatus = 'You have not completed this experiment';
                $quizBadge = 'bg-light text-secondary';
                $quizStatus = 'You have not completed this quiz';
                $quizResultLink = '#';
                while($user_experiment_row = $user_experiment_result->fetch_assoc()) {
                  $created_on_date = new DateTime($user_experiment_row['created_on']);
                  $formattedDate = $created_on_date->format('F j, Y');
                  if($user_experiment_row['type'] == 'V') {
                    $videoBadge = 'bg-success';
                    $videoStatus = 'You watched this video on '.$formattedDate;
                  } else if($user_experiment_row['type'] == 'E') {
                    $expBadge = 'bg-success';
                    $expStatus = 'You completed this experiment on '.$formattedDate;
                  } else if($user_experiment_row['type'] == 'Q') {
                    $quizBadge = 'bg-success';
                    $quizStatus = 'You completed this quiz on '.$formattedDate;
                    $quizResultLink = 'quiz-result.php?id='.$row["id"];
                  }
                }
                $docLink='';
                if(!empty($row["doc"])) {
                  $docLink='<a href="doc.php?id='.$row["id"].'"><button type="button" class="btn mx-1 btn-outline-primary tooltip-file"><i class="bi bi-file-earmark-text"></i></button></a>';
                }
                echo '
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Experiment #'.$row["id"].'
                      <span class="mx-5">
                        <span class="badge rounded-pill '.$videoBadge.' tooltip-status" data-tippy-content="'.$videoStatus.'">Video</span>
                        <span class="badge rounded-pill '.$expBadge.' tooltip-status" data-tippy-content="'.$expStatus.'">Experiment</span>
                        <a href="'.$quizResultLink.'"><span class="badge rounded-pill '.$quizBadge.' tooltip-status" data-tippy-content="'.$quizStatus.'">Quiz</span></a>
                      </span>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <table style="width: 100%;">
                        <tr>
                          <td style="width: 90%;">'.$row["aim"].'</td>
                          <td>'.$docLink.'</td>
                          <td><a href="watch.php?id='.$row["id"].'&v='.$row["video"].'"><button type="button" class="btn mx-1 btn-outline-danger tooltip-video"><i class="bi bi-youtube"></i></button></a></td>
                          <td><a href="perform.php?id='.$row["id"].'&expo='.$row["perform"].'"><button type="button" class="btn mx-1 btn-outline-success tooltip-experiment"><i class="bi bi-cursor-fill"></i></button></a></td>
                          <td><a href="quiz.php?id='.$row["id"].'&q=1"><button type="button" class="btn mx-1 btn-outline-danger tooltip-quiz"><i class="bi bi-alarm"></i></button></a></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>';
              }
            }
          ?>
        </div>
      </section>
    </div>
<?php page_footer(false); ?>
<script>
  tippy('.tooltip-file', {
    content: 'More details about this experiment',
  });
  tippy('.tooltip-video', {
    content: 'Watch video related to this experiment',
  });
  tippy('.tooltip-experiment', {
    content: 'Try this experiment in virtual lab',
  });
  tippy('.tooltip-quiz', {
    content: 'Test you knowledge with quiz',
  });
  tippy('.tooltip-status', {arrow: true,});
</script>