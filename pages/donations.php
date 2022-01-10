<h1 class="subtitle">How can you support us?</h1>

<p class="article-p">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit distinctio sapiente nemo, vitae velit unde, quidem, modi provident dicta veritatis officiis ipsam. Ea ex voluptas eum rerum temporibus voluptatem, eaque aliquid illum porro eius quia doloribus. Voluptates, voluptas eligendi? Amet perspiciatis cupiditate a expedita praesentium!</p>

<h1 class="subtitle">Prices</h1>

<div class="donation-box">
    <table>
        <thead>
            <tr>
                <th>Package Type</th>
                <th>Contents</th>
                <th>Price</th>
                <th>Quality</th>
            </tr>
        </thead>
        <tbody>
            <!-- Print table contents-->
            <?php
                $server = 'localhost:3307';
                $user_name = 'root';
                $pw = '';
                $db = 'ragc';
            
                $conn = mysqli_connect($server, $user_name, $pw, $db);
            
                $sql = 'SELECT * FROM donation ORDER BY price ASC';
                $result = mysqli_query($conn, $sql);
                $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

                $packageName = array();
                $packagoContent = array();
                $packagePrice = array();
                $qualities = array('quality-bronze', 'Bronze', 'quality-silver', 'Silver', 'quality-gold', 'Gold');

                foreach ($data as $dat) 
                {
                    $element = htmlspecialchars($dat['name']);
                    array_push($packageName, $element);

                    $element = htmlspecialchars($dat['includes']);
                    array_push($packagoContent, $element);

                    $element = htmlspecialchars($dat['price']);
                    array_push($packagePrice, $element);
                } 

                $index = 0;
                for ($i = 0; $i < count($packageName); $i++) 
                {
                    $name = $packageName[$i];
                    $content = $packagoContent[$i];
                    $price = $packagePrice[$i];
                    $qualityClass = $qualities[$index];
                    $quality = $qualities[$index+1];

                    echo '<tr>
                            <td>' . $name . '</td>
                            <td>' . $content .'</td>
                            <td>$' . $price . '</td>
                            <td><span class="quality '. $qualityClass . '">' . $quality . '</span></td>
                        </tr>';
                    $index += 2;
                }
            ?>
        </tbody>
    </table>
    <button class="dnt-btn">DONATE</button>
</div>