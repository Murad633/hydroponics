<?php include 'header2.php';
include_once 'database.php';
?>


<div class="repobody">
    <h1>Akifin sahəsi <span style="font-size: 12px; font-weight: inherit;">12 hektar</span></h1> 
    <div class="firstpart">
        <div class="repoinfo">
            <div id="repoh2"><h2>Anbar</h2></div>
            <ul>
                <li>Socar Karbamid &nbsp;&nbsp;&nbsp;&nbsp; <span>20 kq</span></li>
                <li>Ammofos <span> 15 kq</span></li>
                <li>Kalsium Nitrat <span>30 kq</span></li>
                <li>Kalium Sulfat <span>10 kq</span></li>
            </ul>
            <form class="akif" target="_blank" >
                <select id="fertilizer" name="fertilizer" >
                  <option value="none" disabled selected>Seçin</option>
                  <option id="socar" value="Socar">Socar Karbamid</option>
                  <option value="Ammofos">Ammofos</option>
                  <option value="Kalsium">Kalsium Nitrat</option>
                  <option value="Kalium">Kalium Sulfat</option>
                </select>
              </form>
              <br>
              <div style="text-align: center;"><a id="dandik" target="_blank" href="https://agroline.az/2021/06/16/karbamid-marka-b-socar-1000-kq/">Sifariş et</a></div>
              
        </div>

<?php 
$sql = "SELECT * FROM fieldstate ;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "<table>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Vaxt</th>";
echo "<th>Rutubet</th>";
echo "<th>Nem</th>";
echo "<th>Temperatur</th>";
echo "</tr>";


if($resultCheck > 0 ) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>";
        echo $row['ID'] ;
        echo "</td>"; 
        echo "<td>";
        echo $row['time'] ;
        echo "</td>";
         echo "<td>";
        echo $row['humidity'] ;
        echo "</td>"; 
        echo "<td>";
        echo $row['moist'] ;
        echo "</td>"; 
        echo "<td>";
        echo $row['temperature'] ;
        echo "</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>

        <!-- <table>
            <tr>
                <th>No</th>
                <th>Vaxt</th>
                <th>Rutubet</th>
                <th>Nem</th>
                <th>Temperatur</th>
            </tr>
            <tr>
                <td>1</td>
                <td>efrew</td>
                <td>wefwef</td>
                <td>fwaef</td>
                <td>dfawE</td>
            </tr><tr>
                <td>2</td>
                <td>efrew</td>
                <td>wefwef</td>
                <td>fwaef</td>
                <td>dfawE</td>
            </tr><tr>
                <td>3</td>
                <td>efrew</td>
                <td>wefwef</td>
                <td>fwaef</td>
                <td>dfawE</td>
            </tr>
        </table> -->
    </div>
    <div class="secondpart">
        <div class="filterizer ">
            <h2>Torpağın gübrə tərkibi</h2>
            <div class="socar allfl">
                <p>Socar Karbamid <span>60%</span></p>
                <div class="bar">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="ammofos allfl">
                <p>Ammofos <span>90%</span></p>
                <div class="bar">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="kalsium allfl">
                <p>Kalsium Nitrat<span>30%</span></p>
                <div class="bar">
                    <div class="percentage"></div>
                </div>
            </div>
            <div class="kalium allfl">
                <p>Kalium Sulfat<span>80%</span></p>
                <div class="bar">
                    <div class="percentage"></div>
                </div>
            </div>
        </div>
        <div class="gif">
            <img src="img/gif.gif" alt="">
        </div>
    </div>
    
</div>

<footer>
    <h4>Powered by Hydrophonics &copy; 2022</h4>
</footer>
