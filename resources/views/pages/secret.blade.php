<x-main>
    <div>
        <p class="paragraph">Did you remember when you were child?</p>
        <div class="titles"> Take a breath, play and get relaxed!</div>
        <div class="game">
            <div class="controlss">
                <button class="buttonss">Start</button>
                <div class="stats">
                    <div class="moves">0 moves</div>
                    <div class="timer">Time: 0 sec</div>
                </div>
            </div>
            <div class="board-container">
                <div class="board" data-dimension="4"></div>
                <div class="win">You won!</div>
            </div>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Emanuele Papale</span></strong>. All Rights Reserved
          </div>
        <div class="credits">
            Designed by <a href="{{ route('homepage') }}">Emanuele Papale</a>
           </div>
        </div>
</x-main>
