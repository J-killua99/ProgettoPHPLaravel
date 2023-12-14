<x-layout> 
    <section>
        <div class="container-fluid py-5 content-page">
            <div class="body-content">
                <div class="row justify-content-center game-container">
                    <div class="title title-white">Giochi più recenti</div>
                    <p>Entra per giocare a questi titoli!</p>
                    
                    <div class="game-list">
                        <div class="card-game">
                            <img src="https://estnn.com/wp-content/uploads/2020/01/league-of-legends-header-x.jpg"  alt="">
                            
                            <div class="content-game">
                                <strong>League of Legends</strong>
                                <p> Jogo de MOBA</p>
                            </div>
                            
                        </div> 
                        
                        <div class="card-game">
                            <img src="https://cdn.awsli.com.br/600x450/530/530806/produto/19872046/1744e79ca2.jpg"  alt="">
                            
                            <div class="content-game">
                                <strong>Counter Strike</strong>
                                <p> Jogo de TIRO</p>
                            </div>
                            
                        </div> 
                        
                        
                        <div class="card-game">
                            <img src="https://estnn.com/wp-content/uploads/2020/01/league-of-legends-header-x.jpg"  alt="">
                            
                            <div class="content-game">
                                <strong>League of Legends</strong>
                                <p> Jogo de MOBA</p>
                            </div>
                            
                        </div> 
                    </div>
                </div>
                
                <div class="card-login">
                    
                    
                    <div class="header-login">
                        <div class="title">Sign in</div>
                        
                        <div class="close-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        </div>
                        
                    </div>
                    
                    <form method="POST" action="/login" class="p-5 mt-5" id="login">
                        @csrf
                        <div class="container-input">
                            <input type="email" name="email" id="username" placeholder="Email">
                        </div>
                        
                        <div class="container-input">
                            <input type="password" name="password" id="password" placeholder="Password">
                        </div>
                        
                        <div class="buttons-login">
                            <button type="submit"class="btn-purple">Login</button>
                        </div>
                        
                    </form>
                    
                    </div>    
                </div>
            </div>
        </div>
    </section>
</x-layout>