<section style="position:relative;min-height:100vh;display:flex;align-items:center;overflow:hidden;background:#0b0f1a" class="bg-grid">

  <div class="glow-blob" style="width:700px;height:700px;top:-200px;left:-200px;opacity:0.5"></div>
  <div class="glow-blob" style="width:500px;height:500px;bottom:-100px;right:-100px;opacity:0.3"></div>

  <div style="max-width:1200px;margin:0 auto;padding:5rem 1.5rem;position:relative;z-index:1;width:100%">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

      <div>
        <div class="badge reveal" style="margin-bottom:1.5rem">
          <span style="width:6px;height:6px;border-radius:50%;background:#64dd17;display:inline-block"></span>
          Especialistas em academias
        </div>

        <h1 class="reveal" style="font-size:clamp(2.4rem,5vw,3.75rem);font-weight:900;line-height:1.08;animation-delay:.1s">
          Levamos sua<br>academia ao<br>
          <span class="text-gradient">topo!</span>
        </h1>

        <p class="reveal" style="color:#8892a4;font-size:1.1rem;line-height:1.75;margin-top:1.5rem;max-width:460px;animation-delay:.2s">
          Performance real para academias. Unimos tráfego pago local, SEO e estratégias de conversão para encher sua grade de alunos todos os meses.
        </p>

        <div class="reveal" style="display:flex;flex-wrap:wrap;gap:1rem;margin-top:2.5rem;animation-delay:.3s">
          <a href="<?php echo esc_url(theme_whatsapp_link('Quero levar minha academia ao topo!')); ?>"
             target="_blank" class="btn-primary animate-pulse-btn" style="font-size:1rem;padding:1rem 2.25rem">
            Quero mais alunos
            <svg style="width:1.1rem;height:1.1rem" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
          <a href="#como-funciona" class="btn-outline" style="font-size:1rem;padding:1rem 2.25rem">Ver como funciona</a>
        </div>

        <div class="reveal" style="display:flex;align-items:center;gap:1rem;margin-top:2.5rem;animation-delay:.4s">
          <div style="display:flex">
            <?php foreach(['A','B','R','M'] as $i => $l): ?>
            <div style="width:2.25rem;height:2.25rem;border-radius:50%;background:linear-gradient(135deg,#1e2740,#131929);border:2px solid #0b0f1a;<?php echo $i>0?'margin-left:-0.6rem':''; ?>;display:flex;align-items:center;justify-content:center;font-size:0.7rem;font-weight:700;color:#64dd17">
              <?php echo $l; ?>
            </div>
            <?php endforeach; ?>
          </div>
          <div>
            <div style="display:flex;gap:1px;color:#f59e0b;font-size:0.8rem">★★★★★</div>
            <p style="font-size:0.78rem;color:#8892a4;margin-top:2px">+200 academias atendidas</p>
          </div>
        </div>
      </div>

      <div class="hidden lg:flex justify-end">
        <div class="animate-float" style="position:relative;width:400px">
          <div class="card" style="padding:1.75rem;position:relative;overflow:hidden">
            <div class="glow-blob" style="width:300px;height:300px;top:-100px;right:-100px;opacity:0.4"></div>
            <div style="position:relative;z-index:1">
              <div style="display:flex;justify-content:space-between;align-items:flex-start;margin-bottom:1.5rem">
                <div>
                  <p style="font-size:0.7rem;color:#8892a4;letter-spacing:.08em;text-transform:uppercase">Novos alunos / mês</p>
                  <p class="stat-number" style="margin-top:.25rem">+127</p>
                </div>
                <div style="background:#00c85220;border:1px solid #00c85340;border-radius:.5rem;padding:.6rem">
                  <svg style="width:1.4rem;height:1.4rem;color:#64dd17;stroke:#64dd17" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                  </svg>
                </div>
              </div>
              <div style="display:flex;gap:5px;align-items:flex-end;height:60px;margin-bottom:1.25rem">
                <?php foreach([28,42,35,58,50,72,65,88,80,100] as $h): ?>
                  <div style="flex:1;border-radius:3px 3px 0 0;background:linear-gradient(to top,#00c853,#64dd17);height:<?php echo $h; ?>%;opacity:.8"></div>
                <?php endforeach; ?>
              </div>
              <div style="display:flex;justify-content:space-between;font-size:.7rem;color:#8892a4;margin-bottom:1.25rem">
                <span>Jan</span><span>Fev</span><span>Mar</span><span>Abr</span><span>Mai</span>
              </div>
              <div style="height:1px;background:rgba(255,255,255,.06);margin-bottom:1.25rem"></div>
              <div style="display:flex;gap:.75rem">
                <div style="flex:1;background:#131929;border-radius:.5rem;padding:.75rem;text-align:center">
                  <p style="font-size:.65rem;color:#8892a4">Conversão</p>
                  <p style="font-size:1.2rem;font-weight:800;color:#64dd17;margin-top:.15rem">+34%</p>
                </div>
                <div style="flex:1;background:#131929;border-radius:.5rem;padding:.75rem;text-align:center">
                  <p style="font-size:.65rem;color:#8892a4">Custo/lead</p>
                  <p style="font-size:1.2rem;font-weight:800;color:#64dd17;margin-top:.15rem">↓62%</p>
                </div>
              </div>
            </div>
          </div>
          <div style="position:absolute;top:-1.25rem;right:-1.25rem;background:linear-gradient(135deg,#00c853,#64dd17);border-radius:.75rem;padding:.75rem 1rem;color:#0b0f1a;font-weight:800;text-align:center;box-shadow:0 8px 32px #00c85550">
            <p style="font-size:1.5rem;font-weight:900;line-height:1">R$4,80</p>
            <p style="font-size:.65rem;font-weight:600;opacity:.8">custo por lead</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
