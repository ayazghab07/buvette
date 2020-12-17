<tbody> 
                        <th>2016-06-10</th>
              <th><img src="img\fr.png"width="20%" ></th>
              <th><img src="img\ro.png"  width="20%"></th>
              <th>0-0</th>
    
                        </tbody>
                        <tbody> 
                            <th>2016-06-11</th>
                            <th><img src="img\alb.png" width="20%"> </th>
                            <th><img src="img\su.png" width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                        <tbody> 
                            <th>2016-06-11</th>
                            <th><img src="img\ga.png" width="20%"> </th>
                            <th><img src="img\sl.png" width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                        <tbody> 
                            <th>2016-06-11</th>
                            <th><img src="img\an.png" width="20%"> </th>
                            <th><img src="img\ru.png" width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                        <tbody> 
                            <th>2016-06-11</th>
                            <th><img src="img\tu.png" width="20%"> </th>
                            <th><img src="img\cr.png " width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                        <tbody> 
                            <th>2016-06-12</th>
                            <th><img src="img\po.png" width="20%"> </th>
                            <th><img src="img\ir.png" width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                        <tbody> 
                            <th>2016-06-12</th>
                            <th><img src="img\al.png" width="20%"> </th>
                            <th><img src="img\uk.png" width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                        <tbody> 
                            <th>2016-06-13</th>
                            <th><img src="img\es.png" width="20%"> </th>
                            <th><img src="img\rt.png" width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                        <tbody> 
                            <th>2016-06-13</th>
                            <th><img src="img\ir.png" width="20%"> </th>
                            <th><img src="img\su.png" width="20%"></th>
                            <th>0-0</th>
                           
                        </tbody>
                    </table>


                    <tbody>
                        <?php 
                        $query="select * from match";
                        $result=mysqli_query($com,$query);
                        $matchs=mysqli_fetch_assoc($result);
                        foreach($matchs as $match){
                            <tr>
                            <td>$match["date"]</td>]
                            <td>$match["eqA"]</td>]
                            <td>$match["eqB"]</td>]
                            <td>$match["scoreA"]-$match["scoreB"]</td>
                            </tr>
                        }
 
                         ?>  
                  </tbody>