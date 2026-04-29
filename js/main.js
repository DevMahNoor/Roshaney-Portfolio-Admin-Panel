// ─── Sidebar toggle ───────────────────────────────────────────
const sidebar  = document.getElementById('sidebar');
const overlay  = document.getElementById('sidebar-overlay');
const menuBtn  = document.getElementById('menu-toggle');

if (menuBtn) {
  menuBtn.addEventListener('click', () => {
    sidebar.classList.toggle('open');
    overlay.classList.toggle('show');
  });
}
if (overlay) {
  overlay.addEventListener('click', () => {
    sidebar.classList.remove('open');
    overlay.classList.remove('show');
  });
}

// ─── Active nav link ──────────────────────────────────────────
document.querySelectorAll('.nav-item').forEach(item => {
  item.addEventListener('click', function () {
    document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
    this.classList.add('active');
  });
});

// ─── Tab switching ────────────────────────────────────────────
document.querySelectorAll('.tab').forEach(tab => {
  tab.addEventListener('click', function () {
    const group = this.closest('.tabs');
    group.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
    this.classList.add('active');
  });
});

// ─── Tag input ────────────────────────────────────────────────
document.querySelectorAll('.tag-input-field').forEach(input => {
  input.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ',') {
      e.preventDefault();
      const val = this.value.trim().replace(/,$/, '');
      if (!val) return;
      const container = this.closest('.form-group').querySelector('.tags-wrap');
      const tag = document.createElement('span');
      tag.className = 'tag';
      tag.innerHTML = `${val} <button onclick="this.parentElement.remove()">×</button>`;
      container.appendChild(tag);
      this.value = '';
    }
  });
});

// ─── Toast notification ───────────────────────────────────────
function showToast(msg, type = 'info') {
  const t = document.createElement('div');
  const colors = { info: '#3b82f6', success: '#10b981', danger: '#ef4444' };
  t.style.cssText = `
    position:fixed; bottom:24px; right:24px; z-index:999;
    background:#111827; border:1px solid ${colors[type]};
    color:#f1f5f9; padding:14px 20px; border-radius:10px;
    font-family:'DM Sans',sans-serif; font-size:.88rem;
    box-shadow:0 4px 24px rgba(0,0,0,.5);
    display:flex; align-items:center; gap:10px;
    animation:fadeUp .3s ease;
    border-left: 4px solid ${colors[type]};
  `;
  t.textContent = msg;
  document.body.appendChild(t);
  setTimeout(() => t.remove(), 3200);
}

// ─── Form submit interceptor (demo) ──────────────────────────
document.querySelectorAll('form.demo-form').forEach(form => {
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const btn = this.querySelector('[type="submit"]');
    btn.textContent = 'Saving…';
    btn.disabled = true;
    setTimeout(() => {
      btn.textContent = 'Saved ✓';
      showToast('Data saved successfully!', 'success');
      setTimeout(() => { btn.textContent = btn.dataset.label || 'Save'; btn.disabled = false; }, 2000);
    }, 900);
  });
});
