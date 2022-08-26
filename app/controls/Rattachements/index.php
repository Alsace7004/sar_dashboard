<!-- header -->
<?php include("../../repositories/inc/header.php") ?>
<!-- /header -->

    <!-- NAVIGATION SIDEBAR BEGIN-->
    <?php include("../../repositories/inc/navbar.php") ?>
    <!-- /NAVIGATION SIDEBAR END-->
    <!-- Nav-top -->
    <?php include("../../repositories/inc/nav-top.php") ?>
    <!-- /Nav-top -->
    
    <!-- 
        =============== COMMENCER VOTRE CODE ICI
     -->
    
    <h1 class="h3 mb-3">LISTE DES RATTACHEMENTS</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    	<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
						Affecter un Agent
						</button>
                </div>
                <div class="card-body">
                        
							<div class="card flex-fill">
								<div class="card-header">

									<h5 class="card-title mb-0">Liste des rattachements</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>Id</th>
											<th>Nom</th>
											<th class="d-none d-xl-table-cell">Prenom</th>
											<th class="d-none d-xl-table-cell">Role</th>
											<th>Canton</th>
											<th class="d-none d-md-table-cell">Email</th>
                                            <th class="d-none d-md-table-cell">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Project</td>
											<td class="d-none d-xl-table-cell"> Apollo</td>
											<td class="d-none d-xl-table-cell">Masculin</td>
											<td><span class="badge bg-success">Couturier</span></td>
											<td class="d-none d-md-table-cell">Agoe</td>
										</tr>
										<!--<tr>
											<td>Project Fireball</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-danger">Cancelled</span></td>
											<td class="d-none d-md-table-cell">William Harris</td>
										</tr>
										<tr>
											<td>Project Hades</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Sharon Lessman</td>
										</tr>
										<tr>
											<td>Project Nitro</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-warning">In progress</span></td>
											<td class="d-none d-md-table-cell">Vanessa Tucker</td>
										</tr>
										<tr>
											<td>Project Phoenix</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">William Harris</td>
										</tr>
										<tr>
											<td>Project X</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Sharon Lessman</td>
										</tr>
										<tr>
											<td>Project Romeo</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-success">Done</span></td>
											<td class="d-none d-md-table-cell">Christina Mason</td>
										</tr>
										<tr>
											<td>Project Wombat</td>
											<td class="d-none d-xl-table-cell">01/01/2021</td>
											<td class="d-none d-xl-table-cell">31/06/2021</td>
											<td><span class="badge bg-warning">In progress</span></td>
											<td class="d-none d-md-table-cell">William Harris</td>
										</tr>-->
									</tbody>
								</table>
							</div>
						
                </div>
            </div>
        </div>
    </div>

			

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Affectation d'un Agent</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
							<button type="button" class="btn btn-primary">Ajouter</button>
						</div>
					</div>
				</div>
			</div>

    <!-- 
        =============== FIN DE VOTRE CODE
     -->
    <!-- MAIN-CLOSER -->
    <?php include("../../repositories/inc/main-closer.php") ?>
    <!-- MAIN-CLOSER -->

<!-- footer -->
<?php include("../../repositories/inc/footer.php") ?>
<!-- /footer -->


<script>
    const getAllCitoyens = async () =>{
            var res  =  await fetch("http://localhost:5000/api/rattachements");
            var result = await res.json();
            console.log("valeur de result:",result.ratachement);
            //ici j'ai un tableau d'objets
            //console.log("Resulat du tableau d'objets : ",result);
            var tsr="";
            result.ratachement.map(
                (result)=>{
                    //ici j'ai des objets
                    //console.log("Resulat des objets : ",result);
                    var id = result.id;
                    var name = result.name;
                    var firstname = result.firstname;
                    var role_name = result.role_name;
                    var nom_canton = result.nom_canton;
                    var email = result.email;
                    //var birthday = result.birthday;

                    //console.log("firstname : "+firstname+"\n Lastname : "+lastname+"\nEmail : "+email+"\nAge : "+age+"\n");
                    tsr+="<tr>";
						tsr+="<td>"+id+"</td>";
                        tsr+="<td>"+name+"</td>";
                        tsr+="<td class='d-none d-xl-table-cell'>"+firstname+"</td>";
                        tsr+="<td class='d-none d-xl-table-cell'>"+role_name+"</td>";
                        tsr+="<td>"+nom_canton+"</td>";
                        tsr+="<td class='d-none d-md-table-cell'>"+email+"</td>";
                        tsr+="<td>";
                            tsr+="<button class='btn btn-primary btn-sm' onclick='edit_data(this)' data-key='"+id+"'>Edit</button>";
                            //tsr+="<button class='btn btn-danger' onclick='delete_data(this)' data-key='"+id+"'>Del</button>";
                        tsr+="</td>";
                    
                    tsr+="</tr>";
                }
            );
            document.querySelector("tbody").innerHTML=tsr;
        
    }
    getAllCitoyens();
</script>