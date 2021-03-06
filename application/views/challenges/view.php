<h1>Challenges</h1>

<div class="challenges">
  
  <table class="table" style="font-size: 20px">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>score</th>
        <th>type</th>
        <th>online_time</th>
        <th>visit_times</th>
        <th>resource</th>
        <th>document</th>
        <th>submit</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($challenges as $challenge_item): ?>
      <tr>
          <td><?php echo $challenge_item['name']; ?></td>
          <td><?php echo $challenge_item['description']; ?></td>
          <td><?php echo $challenge_item['score']; ?></td>
          <td><?php echo $challenge_item['type']; ?></td>
          <td><?php echo date('Y-m-d H:i:s', $challenge_item['online_time']); ?></td>
          <td>0 times</td>
          <?php
            echo '<td>';
            if (strlen($challenge_item['resource']) == 0){
              echo "无";
            }else{
              echo '<a target="_blank" href="';
              echo $challenge_item['resource']; 
              echo '">';
              if (substr($challenge_item['resource'], -1) === "/"){
                echo "链接";
              }else{
                echo "下载";
              }
              echo '</a>';
            }
            echo '</td>';
          ?>  
          
          <td><a target="_blank" href="<?php echo $challenge_item['document']; ?>">参考资料</a></td>
          <td><form action="/challenges/submit" method="POST">
              <input type="text" name="flag">
              <input type="hidden" name="challengeID" value="<?php echo html_escape($challenge_item['challengeID']);?>">
              <input class="btn btn-default" type="submit">
          </form></td>
      </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</div>
<a href="SniperOJ{This_IS-A_QIanDAOti}"><a>
