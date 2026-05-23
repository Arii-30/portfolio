<?php
  $name = "Ari Khalaf Abdullah";
  $title = "CS Graduate & Developer";
  $email = "ariduhki@gmail.com";
  $phone = "0750-8649507";
  $location = "Duhok, Kurdistan Region, Iraq";
  $github = "https://github.com/Arii-30";
  $year = date("Y");
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $name ?> — Developer Portfolio</title>
  <meta name="description" content="CS Graduate from University of Duhok. PHP, Java, JavaScript developer specializing in POS systems and web applications.">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Mono:ital,wght@0,400;0,500;1,400&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* =============================================
       CSS CUSTOM PROPERTIES & THEMES
    ============================================= */
    :root {
      --cyan: #00d4aa;
      --cyan-dim: rgba(0, 212, 170, 0.12);
      --orange: #ff6b35;
      --orange-dim: rgba(255, 107, 53, 0.12);
      --transition: 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    }

    [data-theme="dark"] {
      --bg: #07090f;
      --bg2: #0d1117;
      --bg3: #111827;
      --bg-glass: rgba(13, 17, 23, 0.75);
      --border: rgba(255,255,255,0.07);
      --border-hover: rgba(0, 212, 170, 0.35);
      --text: #e8ecf4;
      --text2: #8892a4;
      --text3: #545f73;
      --nav-bg: rgba(7, 9, 15, 0.85);
      --shadow: 0 20px 60px rgba(0,0,0,0.6);
      --glow: 0 0 40px rgba(0, 212, 170, 0.15);
      --dot-color: rgba(255,255,255,0.035);
      --card: rgba(13, 17, 23, 0.9);
    }

    [data-theme="light"] {
      --bg: #f0ede8;
      --bg2: #faf9f7;
      --bg3: #ffffff;
      --bg-glass: rgba(250, 249, 247, 0.85);
      --border: rgba(0,0,0,0.08);
      --border-hover: rgba(0, 150, 115, 0.4);
      --text: #111827;
      --text2: #4b5563;
      --text3: #9ca3af;
      --nav-bg: rgba(240, 237, 232, 0.9);
      --shadow: 0 20px 60px rgba(0,0,0,0.08);
      --glow: 0 0 40px rgba(0, 150, 115, 0.1);
      --dot-color: rgba(0,0,0,0.04);
      --card: rgba(255, 255, 255, 0.95);
      --cyan: #00a88a;
      --orange: #e55a25;
    }

    /* =============================================
       RESET & BASE
    ============================================= */
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    html { scroll-behavior: smooth; scroll-padding-top: 80px; }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--bg);
      color: var(--text);
      transition: background var(--transition), color var(--transition);
      overflow-x: hidden;
      line-height: 1.65;
      font-size: 16px;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    /* Dot grid background */
    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background-image: radial-gradient(var(--dot-color) 1px, transparent 1px);
      background-size: 28px 28px;
      pointer-events: none;
      z-index: 0;
    }

    /* Ambient glow blobs */
    .ambient-glow {
      position: fixed;
      border-radius: 50%;
      filter: blur(120px);
      pointer-events: none;
      z-index: 0;
      opacity: 0.35;
    }
    .ambient-glow.g1 {
      width: 600px; height: 600px;
      background: radial-gradient(circle, rgba(0,212,170,0.18) 0%, transparent 70%);
      top: -200px; right: -100px;
    }
    .ambient-glow.g2 {
      width: 500px; height: 500px;
      background: radial-gradient(circle, rgba(255,107,53,0.12) 0%, transparent 70%);
      bottom: 10%; left: -150px;
    }

    a { text-decoration: none; color: inherit; }
    img { max-width: 100%; display: block; }

    .container {
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 1.5rem;
      position: relative;
      z-index: 1;
    }

    /* =============================================
       NAVIGATION
    ============================================= */
    #navbar {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 1000;
      padding: 0;
      transition: all var(--transition);
    }

    #navbar.scrolled {
      background: var(--nav-bg);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border-bottom: 1px solid var(--border);
      box-shadow: 0 8px 32px rgba(0,0,0,0.15);
    }

    .nav-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.1rem 1.5rem;
      max-width: 1140px;
      margin: 0 auto;
    }

    .nav-logo {
      font-family: 'Syne', sans-serif;
      font-weight: 800;
      font-size: 1.4rem;
      letter-spacing: -0.03em;
      background: linear-gradient(135deg, var(--cyan), var(--orange));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 0.2rem;
      list-style: none;
    }

    .nav-links a {
      font-size: 0.88rem;
      font-weight: 500;
      color: var(--text2);
      padding: 0.45rem 0.9rem;
      border-radius: 2rem;
      transition: all 0.2s;
      letter-spacing: 0.01em;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: var(--cyan);
      background: var(--cyan-dim);
    }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 0.75rem;
    }

    .theme-btn {
      width: 38px; height: 38px;
      border-radius: 50%;
      border: 1px solid var(--border);
      background: var(--bg2);
      color: var(--text2);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
      transition: all 0.2s;
    }

    .theme-btn:hover { border-color: var(--cyan); color: var(--cyan); }

    .nav-cta {
      font-size: 0.85rem;
      font-weight: 600;
      padding: 0.5rem 1.2rem;
      border-radius: 2rem;
      background: var(--cyan);
      color: #07090f;
      border: none;
      cursor: pointer;
      transition: all 0.2s;
      font-family: 'DM Sans', sans-serif;
    }
    .nav-cta:hover { opacity: 0.85; transform: translateY(-1px); }

    /* Mobile nav */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      padding: 4px;
    }
    .hamburger span {
      display: block;
      width: 22px; height: 2px;
      background: var(--text);
      border-radius: 2px;
      transition: all 0.3s;
    }
    .hamburger.open span:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
    .hamburger.open span:nth-child(2) { opacity: 0; }
    .hamburger.open span:nth-child(3) { transform: rotate(-45deg) translate(5px, -5px); }

    .mobile-menu {
      display: none;
      position: fixed;
      inset: 0;
      background: var(--bg);
      z-index: 999;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 1.5rem;
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a {
      font-family: 'Syne', sans-serif;
      font-size: 2rem;
      font-weight: 700;
      color: var(--text2);
      transition: color 0.2s;
    }
    .mobile-menu a:hover { color: var(--cyan); }

    /* =============================================
       SHARED SECTION STYLES
    ============================================= */
    section { position: relative; z-index: 1; }

    .section-header {
      margin-bottom: 3.5rem;
    }

    .section-eyebrow {
      font-family: 'DM Mono', monospace;
      font-size: 0.75rem;
      color: var(--cyan);
      letter-spacing: 0.18em;
      text-transform: uppercase;
      margin-bottom: 0.7rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-weight: 500;
    }
    .section-eyebrow::before {
      content: '';
      display: block;
      width: 24px; height: 1px;
      background: var(--cyan);
    }

    .section-title {
      font-family: 'Syne', sans-serif;
      font-size: clamp(1.9rem, 4vw, 2.8rem);
      font-weight: 800;
      letter-spacing: -0.03em;
      line-height: 1.1;
      color: var(--text);
    }

    .section-title span {
      background: linear-gradient(135deg, var(--cyan), var(--orange));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* =============================================
       SCROLL REVEAL ANIMATION
    ============================================= */
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.7s ease, transform 0.7s ease;
    }
    .reveal.revealed {
      opacity: 1;
      transform: translateY(0);
    }
    .reveal-delay-1 { transition-delay: 0.1s; }
    .reveal-delay-2 { transition-delay: 0.2s; }
    .reveal-delay-3 { transition-delay: 0.3s; }
    .reveal-delay-4 { transition-delay: 0.4s; }
    .reveal-delay-5 { transition-delay: 0.5s; }

    /* =============================================
       HERO SECTION
    ============================================= */
    #home {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 120px 0 80px;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1fr auto;
      gap: 4rem;
      align-items: center;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: var(--cyan-dim);
      border: 1px solid rgba(0,212,170,0.2);
      color: var(--cyan);
      font-family: 'DM Mono', monospace;
      font-size: 0.78rem;
      padding: 0.4rem 1rem;
      border-radius: 2rem;
      margin-bottom: 1.5rem;
      letter-spacing: 0.05em;
    }
    .hero-badge .dot {
      width: 7px; height: 7px;
      border-radius: 50%;
      background: var(--cyan);
      animation: pulse-dot 2s infinite;
    }

    @keyframes pulse-dot {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(0.7); }
    }

    .hero-name {
      font-family: 'Syne', sans-serif;
      font-size: clamp(2.4rem, 6vw, 4.2rem);
      font-weight: 800;
      letter-spacing: -0.04em;
      line-height: 1.05;
      margin-bottom: 1rem;
    }

    .hero-name .line1 { color: var(--text); display: block; }
    .hero-name .line2 {
      background: linear-gradient(135deg, var(--cyan) 30%, var(--orange));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      display: block;
    }

    .hero-typed-wrap {
      font-family: 'DM Mono', monospace;
      font-size: 1.1rem;
      color: var(--text2);
      margin-bottom: 1.5rem;
      min-height: 1.8rem;
    }

    .hero-typed-wrap .cursor-blink {
      display: inline-block;
      width: 2px; height: 1.1em;
      background: var(--cyan);
      margin-left: 2px;
      vertical-align: middle;
      animation: blink 0.9s infinite;
    }
    @keyframes blink { 0%,49%{opacity:1} 50%,100%{opacity:0} }

    .hero-desc {
      font-size: 1.08rem;
      color: var(--text2);
      line-height: 1.8;
      max-width: 560px;
      margin-bottom: 2.5rem;
      font-weight: 400;
      letter-spacing: 0.01em;
    }

    .hero-actions {
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      margin-bottom: 3rem;
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: var(--cyan);
      color: #07090f;
      padding: 0.8rem 1.8rem;
      border-radius: 2rem;
      font-weight: 700;
      font-size: 0.92rem;
      transition: all 0.25s;
      border: 2px solid var(--cyan);
      font-family: 'DM Sans', sans-serif;
    }
    .btn-primary:hover {
      background: transparent;
      color: var(--cyan);
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0,212,170,0.25);
    }

    .btn-ghost {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: transparent;
      color: var(--text2);
      padding: 0.8rem 1.8rem;
      border-radius: 2rem;
      font-weight: 600;
      font-size: 0.92rem;
      transition: all 0.25s;
      border: 2px solid var(--border);
      font-family: 'DM Sans', sans-serif;
    }
    .btn-ghost:hover {
      border-color: var(--cyan);
      color: var(--cyan);
      transform: translateY(-2px);
    }

    .hero-stats {
      display: flex;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .hero-stat {
      display: flex;
      flex-direction: column;
    }
    .hero-stat .num {
      font-family: 'Syne', sans-serif;
      font-size: 1.8rem;
      font-weight: 800;
      color: var(--text);
      line-height: 1;
    }
    .hero-stat .num span { color: var(--cyan); }
    .hero-stat .label {
      font-size: 0.78rem;
      color: var(--text3);
      letter-spacing: 0.05em;
      margin-top: 0.2rem;
    }

    .hero-avatar-wrap {
      position: relative;
    }

    .hero-avatar {
      width: 300px; height: 340px;
      border-radius: 2rem;
      background: linear-gradient(135deg, var(--bg3), var(--bg2));
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 7rem;
      position: relative;
      overflow: hidden;
    }

    .hero-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center top;
      display: block;
      border-radius: 2rem;
    }

    .hero-avatar::before {
      content: '';
      position: absolute;
      inset: -1px;
      background: linear-gradient(135deg, var(--cyan), var(--orange), transparent, transparent);
      border-radius: 2rem;
      padding: 1px;
      -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: destination-out;
      mask-composite: exclude;
    }

    .avatar-code-card {
      position: absolute;
      bottom: -16px; right: -20px;
      background: var(--card);
      border: 1px solid var(--border);
      backdrop-filter: blur(12px);
      border-radius: 0.875rem;
      padding: 0.8rem 1.1rem;
      box-shadow: var(--shadow);
      min-width: 160px;
    }
    .avatar-code-card .acc-label {
      font-family: 'DM Mono', monospace;
      font-size: 0.68rem;
      color: var(--text3);
      margin-bottom: 0.4rem;
    }
    .avatar-code-card .acc-value {
      font-family: 'DM Mono', monospace;
      font-size: 0.82rem;
      color: var(--cyan);
    }

    /* =============================================
       ABOUT SECTION
    ============================================= */
    #about { padding: 100px 0; }

    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 5rem;
      align-items: start;
    }

    .about-text p {
      color: var(--text2);
      margin-bottom: 1.25rem;
      font-size: 1.02rem;
      line-height: 1.85;
      letter-spacing: 0.01em;
      font-weight: 400;
    }

    .about-highlights {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 2rem;
    }

    .about-highlight-item {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      padding: 1rem 1.25rem;
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 0.875rem;
      transition: all 0.3s;
    }
    .about-highlight-item:hover {
      border-color: var(--border-hover);
      box-shadow: var(--glow);
      transform: translateX(4px);
    }

    .ahi-icon {
      width: 38px; height: 38px;
      border-radius: 0.5rem;
      background: var(--cyan-dim);
      display: flex; align-items: center; justify-content: center;
      color: var(--cyan);
      font-size: 1rem;
      flex-shrink: 0;
    }
    .ahi-text strong {
      display: block;
      font-weight: 600;
      font-size: 0.92rem;
      margin-bottom: 0.15rem;
    }
    .ahi-text span {
      font-size: 0.82rem;
      color: var(--text3);
    }

    .about-info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    .about-info-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 0.875rem;
      padding: 1.5rem;
      transition: all 0.3s;
    }
    .about-info-card:hover {
      border-color: var(--border-hover);
      transform: translateY(-4px);
      box-shadow: var(--glow);
    }

    .aic-icon {
      width: 44px; height: 44px;
      border-radius: 0.75rem;
      margin-bottom: 1rem;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.25rem;
    }
    .aic-icon.cyan { background: var(--cyan-dim); color: var(--cyan); }
    .aic-icon.orange { background: var(--orange-dim); color: var(--orange); }

    .about-info-card .aic-num {
      font-family: 'Syne', sans-serif;
      font-size: 1.7rem;
      font-weight: 800;
      color: var(--text);
      line-height: 1;
    }
    .about-info-card .aic-label {
      font-size: 0.8rem;
      color: var(--text3);
      margin-top: 0.25rem;
    }

    .education-block {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 0.875rem;
      padding: 1.5rem;
      margin-top: 1rem;
      grid-column: 1 / -1;
      display: flex;
      align-items: center;
      gap: 1.25rem;
      transition: all 0.3s;
    }
    .education-block:hover { border-color: var(--border-hover); }

    .edu-icon {
      width: 52px; height: 52px;
      background: var(--cyan-dim);
      border-radius: 0.875rem;
      display: flex; align-items: center; justify-content: center;
      color: var(--cyan);
      font-size: 1.5rem;
      flex-shrink: 0;
    }
    .edu-info strong {
      display: block;
      font-weight: 700;
      font-size: 0.95rem;
      margin-bottom: 0.2rem;
    }
    .edu-info span {
      font-size: 0.82rem;
      color: var(--text3);
    }

    /* =============================================
       SKILLS SECTION
    ============================================= */
    #skills { padding: 100px 0; background: var(--bg2); }

    .skills-layout {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
    }

    .skill-category-title {
      font-family: 'Syne', sans-serif;
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: var(--text);
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }
    .skill-category-title::before {
      content: '';
      width: 4px; height: 18px;
      background: var(--cyan);
      border-radius: 2px;
    }





    .soft-skills-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0.75rem;
    }

    .soft-skill-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 0.875rem;
      padding: 1rem 1.1rem;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: all 0.3s;
      cursor: default;
    }
    .soft-skill-card:hover {
      border-color: var(--border-hover);
      transform: translateY(-3px);
      box-shadow: var(--glow);
    }
    .ssc-icon {
      font-size: 1.3rem;
      flex-shrink: 0;
    }
    .ssc-text strong {
      display: block;
      font-size: 0.85rem;
      font-weight: 600;
      margin-bottom: 0.1rem;
    }
    .ssc-text span {
      font-size: 0.75rem;
      color: var(--text3);
      line-height: 1.3;
    }

    .tech-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-top: 1rem;
    }

    .tech-tag {
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
      background: var(--bg3);
      border: 1px solid var(--border);
      border-radius: 0.5rem;
      padding: 0.4rem 0.85rem;
      font-family: 'DM Mono', monospace;
      font-size: 0.78rem;
      color: var(--text2);
      transition: all 0.2s;
    }
    .tech-tag:hover {
      border-color: var(--cyan);
      color: var(--cyan);
      background: var(--cyan-dim);
      transform: translateY(-2px);
    }

    /* =============================================
       PROJECTS SECTION
    ============================================= */
    #projects { padding: 100px 0; }

    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
      gap: 1.5rem;
    }

    .project-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 1.25rem;
      overflow: hidden;
      transition: all 0.35s;
      display: flex;
      flex-direction: column;
      position: relative;
    }
    .project-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--cyan), var(--orange));
      opacity: 0;
      transition: opacity 0.3s;
    }
    .project-card:hover {
      border-color: var(--border-hover);
      transform: translateY(-6px);
      box-shadow: var(--shadow), var(--glow);
    }
    .project-card:hover::before { opacity: 1; }

    .project-header {
      padding: 1.75rem 1.75rem 0;
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 1rem;
    }

    .project-icon {
      width: 52px; height: 52px;
      border-radius: 0.875rem;
      background: var(--cyan-dim);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem;
      flex-shrink: 0;
    }
    .project-icon.orange { background: var(--orange-dim); }

    .project-body { padding: 1.5rem 1.75rem; flex: 1; }

    .project-name {
      font-family: 'Syne', sans-serif;
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.6rem;
      color: var(--text);
    }

    .project-desc {
      font-size: 0.92rem;
      color: var(--text2);
      line-height: 1.75;
      margin-bottom: 1.25rem;
      letter-spacing: 0.01em;
    }

    .project-meta {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 1.25rem;
      flex-wrap: wrap;
    }
    .project-badge {
      font-size: 0.72rem;
      font-weight: 600;
      padding: 0.25rem 0.65rem;
      border-radius: 2rem;
      letter-spacing: 0.04em;
    }
    .project-badge.graduation { background: var(--cyan-dim); color: var(--cyan); }
    .project-badge.personal { background: var(--orange-dim); color: var(--orange); }
    .project-badge.team { background: rgba(139,92,246,0.12); color: #a78bfa; }

    .project-tech-stack { display: flex; flex-wrap: wrap; gap: 0.5rem; }

    .ptech-tag {
      font-family: 'DM Mono', monospace;
      font-size: 0.72rem;
      padding: 0.3rem 0.65rem;
      border-radius: 0.375rem;
      background: var(--bg2);
      border: 1px solid var(--border);
      color: var(--text3);
    }

    /* =============================================
       EXPERIENCE / TIMELINE SECTION
    ============================================= */
    #experience { padding: 100px 0; background: var(--bg2); }

    .timeline {
      position: relative;
      padding-left: 2.5rem;
    }
    .timeline::before {
      content: '';
      position: absolute;
      left: 0; top: 8px; bottom: 0;
      width: 1px;
      background: linear-gradient(to bottom, var(--cyan), transparent);
    }

    .timeline-item {
      position: relative;
      padding-bottom: 3rem;
    }
    .timeline-item:last-child { padding-bottom: 0; }

    .timeline-dot {
      position: absolute;
      left: -2.5rem;
      top: 8px;
      transform: translateX(-50%);
      width: 14px; height: 14px;
      border-radius: 50%;
      background: var(--bg);
      border: 2px solid var(--cyan);
      box-shadow: 0 0 12px rgba(0,212,170,0.4);
    }

    .timeline-meta {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      margin-bottom: 0.6rem;
      flex-wrap: wrap;
    }

    .timeline-date {
      font-family: 'DM Mono', monospace;
      font-size: 0.75rem;
      color: var(--cyan);
      background: var(--cyan-dim);
      padding: 0.25rem 0.75rem;
      border-radius: 2rem;
    }

    .timeline-type {
      font-size: 0.72rem;
      font-weight: 600;
      color: var(--text3);
      text-transform: uppercase;
      letter-spacing: 0.08em;
    }

    .timeline-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 1rem;
      padding: 1.5rem;
      transition: all 0.3s;
    }
    .timeline-card:hover {
      border-color: var(--border-hover);
      box-shadow: var(--glow);
    }

    .timeline-role {
      font-family: 'Syne', sans-serif;
      font-size: 1.05rem;
      font-weight: 700;
      margin-bottom: 0.25rem;
      color: var(--text);
    }
    .timeline-org {
      font-size: 0.85rem;
      color: var(--text3);
      margin-bottom: 0.75rem;
    }
    .timeline-desc {
      font-size: 0.92rem;
      color: var(--text2);
      line-height: 1.78;
      letter-spacing: 0.01em;
    }
    .timeline-tags {
      display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 1rem;
    }
    .timeline-tag {
      font-size: 0.73rem;
      padding: 0.25rem 0.65rem;
      border-radius: 0.375rem;
      background: var(--bg2);
      border: 1px solid var(--border);
      color: var(--text3);
    }

    /* =============================================
       CERTIFICATIONS SECTION
    ============================================= */
    #certifications { padding: 100px 0; }

    .certs-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 1.25rem;
    }

    .cert-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 1rem;
      padding: 1.5rem;
      display: flex;
      align-items: flex-start;
      gap: 1.1rem;
      transition: all 0.3s;
      position: relative;
      overflow: hidden;
    }
    .cert-card::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 2px;
      background: linear-gradient(90deg, var(--cyan), transparent);
      opacity: 0;
      transition: opacity 0.3s;
    }
    .cert-card:hover {
      border-color: var(--border-hover);
      transform: translateY(-4px);
      box-shadow: var(--glow);
    }
    .cert-card:hover::after { opacity: 1; }

    .cert-icon {
      width: 46px; height: 46px;
      border-radius: 0.75rem;
      background: var(--cyan-dim);
      display: flex; align-items: center; justify-content: center;
      color: var(--cyan);
      font-size: 1.2rem;
      flex-shrink: 0;
    }

    .cert-body {}
    .cert-name {
      font-weight: 700;
      font-size: 0.92rem;
      margin-bottom: 0.25rem;
      color: var(--text);
    }
    .cert-issuer {
      font-size: 0.8rem;
      color: var(--text3);
      margin-bottom: 0.5rem;
    }
    .cert-year {
      font-family: 'DM Mono', monospace;
      font-size: 0.72rem;
      color: var(--cyan);
      background: var(--cyan-dim);
      padding: 0.18rem 0.6rem;
      border-radius: 2rem;
      display: inline-block;
    }

    /* =============================================
       CONTACT SECTION
    ============================================= */
    #contact { padding: 100px 0; background: var(--bg2); }

    .contact-layout {
      display: grid;
      grid-template-columns: 1fr 1.3fr;
      gap: 4rem;
      align-items: start;
    }

    .contact-info-title {
      font-family: 'Syne', sans-serif;
      font-size: 1.4rem;
      font-weight: 700;
      margin-bottom: 0.75rem;
    }
    .contact-info-desc {
      color: var(--text2);
      font-size: 0.98rem;
      line-height: 1.8;
      margin-bottom: 2rem;
      letter-spacing: 0.01em;
    }

    .contact-details { display: flex; flex-direction: column; gap: 0.875rem; margin-bottom: 2rem; }

    .contact-detail-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      padding: 0.875rem 1.1rem;
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 0.75rem;
      transition: all 0.3s;
    }
    .contact-detail-item:hover {
      border-color: var(--border-hover);
      transform: translateX(4px);
    }

    .cdi-icon {
      width: 38px; height: 38px;
      border-radius: 0.5rem;
      background: var(--cyan-dim);
      display: flex; align-items: center; justify-content: center;
      color: var(--cyan);
      font-size: 0.95rem;
      flex-shrink: 0;
    }
    .cdi-text {}
    .cdi-label {
      font-size: 0.72rem;
      color: var(--text3);
      margin-bottom: 0.1rem;
      letter-spacing: 0.04em;
    }
    .cdi-value {
      font-size: 0.9rem;
      font-weight: 500;
      color: var(--text);
    }

    .social-row {
      display: flex;
      gap: 0.75rem;
    }
    .social-btn {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.6rem 1.1rem;
      border: 1px solid var(--border);
      border-radius: 0.75rem;
      background: var(--card);
      color: var(--text2);
      font-size: 0.85rem;
      font-weight: 500;
      transition: all 0.25s;
    }
    .social-btn:hover {
      border-color: var(--cyan);
      color: var(--cyan);
      background: var(--cyan-dim);
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0,212,170,0.15);
    }

    /* Contact Form */
    .contact-form-card {
      background: var(--card);
      border: 1px solid var(--border);
      border-radius: 1.25rem;
      padding: 2.5rem;
    }

    .form-group { margin-bottom: 1.25rem; }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

    .form-label {
      display: block;
      font-size: 0.82rem;
      font-weight: 600;
      color: var(--text2);
      margin-bottom: 0.4rem;
      letter-spacing: 0.02em;
    }

    .form-control {
      width: 100%;
      background: var(--bg2);
      border: 1px solid var(--border);
      border-radius: 0.75rem;
      padding: 0.75rem 1rem;
      font-family: 'DM Sans', sans-serif;
      font-size: 0.9rem;
      color: var(--text);
      transition: all 0.2s;
      outline: none;
      resize: none;
    }
    .form-control:focus {
      border-color: var(--cyan);
      box-shadow: 0 0 0 3px rgba(0,212,170,0.12);
    }
    .form-control::placeholder { color: var(--text3); }

    .form-submit {
      width: 100%;
      padding: 0.9rem;
      background: var(--cyan);
      color: #07090f;
      border: none;
      border-radius: 0.75rem;
      font-family: 'Syne', sans-serif;
      font-size: 0.95rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.25s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }
    .form-submit:hover {
      opacity: 0.88;
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(0,212,170,0.3);
    }

    /* =============================================
       FOOTER
    ============================================= */
    footer {
      position: relative;
      z-index: 1;
      background: var(--bg);
      border-top: 1px solid var(--border);
      padding: 2.5rem 0;
    }
    .footer-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      flex-wrap: wrap;
    }
    .footer-brand {
      font-family: 'Syne', sans-serif;
      font-weight: 800;
      font-size: 1.1rem;
      background: linear-gradient(135deg, var(--cyan), var(--orange));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .footer-text {
      font-size: 0.82rem;
      color: var(--text3);
    }
    .footer-text span { color: var(--cyan); }

    /* =============================================
       SCROLL TO TOP
    ============================================= */
    .scroll-top {
      position: fixed;
      bottom: 2rem; right: 2rem;
      width: 44px; height: 44px;
      border-radius: 50%;
      background: var(--cyan);
      color: #07090f;
      border: none;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      font-size: 1rem;
      z-index: 900;
      opacity: 0; pointer-events: none;
      transition: all 0.3s;
      box-shadow: 0 4px 16px rgba(0,212,170,0.3);
    }
    .scroll-top.visible {
      opacity: 1;
      pointer-events: auto;
    }
    .scroll-top:hover { transform: translateY(-3px); }

    /* Active nav highlight */
    .nav-links a.active {
      color: var(--cyan);
      background: var(--cyan-dim);
    }

    /* =============================================
       RESPONSIVE
    ============================================= */
    @media (max-width: 900px) {
      .nav-links { display: none; }
      .hamburger { display: flex; }
      .nav-cta { display: none; }

      .hero-grid { grid-template-columns: 1fr; }
      .hero-avatar-wrap { display: none; }

      .about-grid { grid-template-columns: 1fr; gap: 3rem; }
      .skills-layout { grid-template-columns: 1fr; }
      .contact-layout { grid-template-columns: 1fr; gap: 2.5rem; }
      .form-row { grid-template-columns: 1fr; }
      .projects-grid { grid-template-columns: 1fr; }
    }

    @media (max-width: 600px) {
      .about-info-grid { grid-template-columns: 1fr 1fr; }
      .soft-skills-grid { grid-template-columns: 1fr; }
      .hero-stats { gap: 1.25rem; }
      .section-title { font-size: 1.8rem; }
    }
  </style>
</head>
<body>

  <!-- Ambient background glow -->
  <div class="ambient-glow g1"></div>
  <div class="ambient-glow g2"></div>

  <!-- =========================================
       NAVIGATION
  ========================================= -->
  <nav id="navbar">
    <div class="nav-inner">
      <a href="#home" class="nav-logo">AK<span style="color:var(--cyan)">.</span></a>

      <ul class="nav-links" id="navLinks">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#certifications">Certs</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <div class="nav-right">
        <button class="theme-btn" id="themeToggle" aria-label="Toggle theme">
          <i class="fas fa-moon" id="themeIcon"></i>
        </button>
        <a href="#contact" class="nav-cta">Hire Me</a>
        <div class="hamburger" id="hamburger">
          <span></span><span></span><span></span>
        </div>
      </div>
    </div>
  </nav>

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="#home" class="mob-link">Home</a>
    <a href="#about" class="mob-link">About</a>
    <a href="#skills" class="mob-link">Skills</a>
    <a href="#projects" class="mob-link">Projects</a>
    <a href="#experience" class="mob-link">Experience</a>
    <a href="#certifications" class="mob-link">Certs</a>
    <a href="#contact" class="mob-link">Contact</a>
  </div>

  <!-- =========================================
       HERO
  ========================================= -->
  <section id="home">
    <div class="container">
      <div class="hero-grid">
        <!-- Left Content -->
        <div>
          <div class="hero-badge reveal">
            <span class="dot"></span>
            Available for work
          </div>

          <h1 class="hero-name reveal reveal-delay-1">
            <span class="line1">Ari Khalaf</span>
            <span class="line2">Abdullah</span>
          </h1>

          <div class="hero-typed-wrap reveal reveal-delay-2">
            &gt; <span id="typedText"></span><span class="cursor-blink"></span>
          </div>

          <p class="hero-desc reveal reveal-delay-3">
            Computer Science graduate from the University of Duhok. I design and build practical software — from full-stack POS systems to web applications — with a strong focus on clean code and real-world impact.
          </p>

          <div class="hero-actions reveal reveal-delay-4">
            <a href="#projects" class="btn-primary">
              <i class="fas fa-code-branch"></i> View Projects
            </a>
            <a href="<?= $github ?>" target="_blank" class="btn-ghost">
              <i class="fab fa-github"></i> GitHub
            </a>
          </div>

          <div class="hero-stats reveal reveal-delay-5">
            <div class="hero-stat">
              <span class="num">5<span>+</span></span>
              <span class="label">Projects Built</span>
            </div>
            <div class="hero-stat">
              <span class="num">4<span>yr</span></span>
              <span class="label">CS Degree</span>
            </div>
            <div class="hero-stat">
              <span class="num">8<span>+</span></span>
              <span class="label">Technologies</span>
            </div>
          </div>
        </div>

        <!-- Right: Avatar card -->
        <div class="hero-avatar-wrap reveal reveal-delay-3">
          <div class="hero-avatar">
            <!--
              REPLACE the src below with your actual photo filename.
              Example: src="photo.jpg"  or  src="images/ari.jpg"
              Make sure the file is in the same folder as index.php.
            -->
            <img src="photo.jpg" alt="Ari Khalaf Abdullah"
                 onerror="this.style.display='none'; this.parentElement.innerHTML+='👨‍💻';">
          </div>

          <div class="avatar-code-card">
            <div class="acc-label">// status</div>
            <div class="acc-value">open_to_work = true</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================
       ABOUT
  ========================================= -->
  <section id="about">
    <div class="container">
      <div class="section-header reveal">
        <p class="section-eyebrow">Who I Am</p>
        <h2 class="section-title">A developer with a <span>builder's mindset</span></h2>
      </div>

      <div class="about-grid">
        <!-- Left: text + highlights -->
        <div>
          <div class="about-text reveal">
            <p>I'm a Computer Science graduate from the University of Duhok with hands-on experience in software development, database design, and full-stack web development. I enjoy building things that are actually useful — tools people open every day and rely on.</p>
            <p>Over four years at university, I worked on a range of real projects alongside classmates — from POS systems and library management software to a chess game and advertising websites. I led database design, built backend logic, and shipped working software.</p>
            <p>I pick up new technologies quickly and make good use of AI-assisted development. I value clean code, effective teamwork, and delivering results that matter.</p>
          </div>

          <div class="about-highlights">
            <div class="about-highlight-item reveal reveal-delay-1">
              <div class="ahi-icon"><i class="fas fa-graduation-cap"></i></div>
              <div class="ahi-text">
                <strong>University of Duhok</strong>
                <span>B.Sc. Computer Science — 2022–2026</span>
              </div>
            </div>
            <div class="about-highlight-item reveal reveal-delay-2">
              <div class="ahi-icon"><i class="fas fa-globe"></i></div>
              <div class="ahi-text">
                <strong>International Collaboration</strong>
                <span>Global Solutions Sustainability Challenge — US, Jordan, Iraq</span>
              </div>
            </div>
            <div class="about-highlight-item reveal reveal-delay-3">
              <div class="ahi-icon"><i class="fas fa-users"></i></div>
              <div class="ahi-text">
                <strong>Team Nuvision</strong>
                <span>Co-developer • POS Systems • Web Projects</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: stats grid + education -->
        <div>
          <div class="about-info-grid">
            <div class="about-info-card reveal reveal-delay-1">
              <div class="aic-icon cyan"><i class="fas fa-code"></i></div>
              <div class="aic-num">5+</div>
              <div class="aic-label">Projects Built</div>
            </div>
            <div class="about-info-card reveal reveal-delay-2">
              <div class="aic-icon orange"><i class="fas fa-network-wired"></i></div>
              <div class="aic-num">10wk</div>
              <div class="aic-label">Internship Duration</div>
            </div>
            <div class="about-info-card reveal reveal-delay-3">
              <div class="aic-icon cyan"><i class="fas fa-layer-group"></i></div>
              <div class="aic-num">Full</div>
              <div class="aic-label">Stack Development</div>
            </div>
            <div class="about-info-card reveal reveal-delay-4">
              <div class="aic-icon orange"><i class="fas fa-robot"></i></div>
              <div class="aic-num">AI</div>
              <div class="aic-label">Assisted Dev</div>
            </div>
            <div class="education-block reveal reveal-delay-5">
              <div class="edu-icon"><i class="fas fa-university"></i></div>
              <div class="edu-info">
                <strong>University of Duhok (UOD)</strong>
                <span>Bachelor of Science in Computer Science &nbsp;•&nbsp; 2022 – 2026</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================
       SKILLS
  ========================================= -->
  <section id="skills">
    <div class="container">
      <div class="section-header reveal">
        <p class="section-eyebrow">What I Know</p>
        <h2 class="section-title">Technical <span>skills &amp; tools</span></h2>
      </div>

      <div class="skills-layout">
        <!-- Left: Languages as tags -->
        <div>
          <p class="skill-category-title reveal">Core Languages</p>
          <div class="tech-tags reveal">
            <span class="tech-tag"><i class="fab fa-php"></i> PHP</span>
            <span class="tech-tag"><i class="fab fa-java"></i> Java</span>
            <span class="tech-tag"><i class="fab fa-js"></i> JavaScript</span>
            <span class="tech-tag"><i class="fas fa-code"></i> C++</span>
            <span class="tech-tag"><i class="fas fa-database"></i> MySQL</span>
            <span class="tech-tag"><i class="fab fa-html5"></i> HTML / CSS</span>
            <span class="tech-tag"><i class="fas fa-desktop"></i> Visual Basic</span>
            <span class="tech-tag"><i class="fas fa-gamepad"></i> C# / Unity</span>
          </div>

          <p class="skill-category-title reveal" style="margin-top: 2.5rem;">Technologies & Tools</p>
          <div class="tech-tags reveal">
            <span class="tech-tag"><i class="fas fa-network-wired"></i> Networking</span>
            <span class="tech-tag"><i class="fas fa-server"></i> Apache / XAMPP</span>
            <span class="tech-tag"><i class="fab fa-git-alt"></i> Git</span>
            <span class="tech-tag"><i class="fas fa-terminal"></i> Linux CLI</span>
            <span class="tech-tag"><i class="fas fa-robot"></i> AI-Assisted Dev</span>
            <span class="tech-tag"><i class="fas fa-store"></i> POS Architecture</span>
            <span class="tech-tag"><i class="fas fa-chart-bar"></i> Database Design</span>
            <span class="tech-tag"><i class="fas fa-chess"></i> Visual Basic</span>
            <span class="tech-tag"><i class="fas fa-gamepad"></i> Unity / C#</span>
          </div>
        </div>

        <!-- Right: Soft skills -->
        <div>
          <p class="skill-category-title reveal">Soft Skills</p>
          <div class="soft-skills-grid">
            <div class="soft-skill-card reveal reveal-delay-1">
              <div class="ssc-icon">🧠</div>
              <div class="ssc-text">
                <strong>Problem Solving</strong>
                <span>Logical decomposition of complex challenges</span>
              </div>
            </div>
            <div class="soft-skill-card reveal reveal-delay-2">
              <div class="ssc-icon">💬</div>
              <div class="ssc-text">
                <strong>Communication</strong>
                <span>Explains tech clearly to any audience</span>
              </div>
            </div>
            <div class="soft-skill-card reveal reveal-delay-3">
              <div class="ssc-icon">👥</div>
              <div class="ssc-text">
                <strong>Teamwork</strong>
                <span>Experienced in group development projects</span>
              </div>
            </div>
            <div class="soft-skill-card reveal reveal-delay-4">
              <div class="ssc-icon">⚡</div>
              <div class="ssc-text">
                <strong>Fast Learner</strong>
                <span>Picks up new frameworks & languages quickly</span>
              </div>
            </div>
            <div class="soft-skill-card reveal reveal-delay-5">
              <div class="ssc-icon">🔍</div>
              <div class="ssc-text">
                <strong>Attention to Detail</strong>
                <span>Writes clean, well-structured, debugged code</span>
              </div>
            </div>
            <div class="soft-skill-card reveal reveal-delay-1">
              <div class="ssc-icon">🌐</div>
              <div class="ssc-text">
                <strong>Global Mindset</strong>
                <span>Worked with international teams across 3 countries</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================
       PROJECTS
  ========================================= -->
  <section id="projects">
    <div class="container">
      <div class="section-header reveal">
        <p class="section-eyebrow">What I've Built</p>
        <h2 class="section-title">All <span>projects</span></h2>
      </div>

      <div class="projects-grid">
        <!-- Project 1 -->
        <div class="project-card reveal reveal-delay-1">
          <div class="project-header">
            <div class="project-icon">🖥️</div>
          </div>
          <div class="project-body">
            <h3 class="project-name">Graduation POS System</h3>
            <div class="project-meta">
              <span class="project-badge graduation">Graduation</span>
              <span class="project-badge team">Team of 3</span>
            </div>
            <p class="project-desc">A full-featured Point of Sale system built as our graduation project with two classmates. I led the database design and backend logic. The system includes sales management, inventory tracking, a cashier interface, and reporting dashboards.</p>
            <div class="project-tech-stack">
              <span class="ptech-tag">Java</span>
              <span class="ptech-tag">MySQL</span>
              <span class="ptech-tag">JDBC</span>
              <span class="ptech-tag">Swing UI</span>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card reveal reveal-delay-2">
          <div class="project-header">
            <div class="project-icon orange">☕</div>
          </div>
          <div class="project-body">
            <h3 class="project-name">Café POS System</h3>
            <div class="project-meta">
              <span class="project-badge personal">Personal</span>
            </div>
            <p class="project-desc">An independent full-stack POS system built for small café businesses. Features include cashier role management, live inventory tracking, and sales reporting — all accessible through a clean web-based interface. A solo project to sharpen my end-to-end development skills.</p>
            <div class="project-tech-stack">
              <span class="ptech-tag">PHP</span>
              <span class="ptech-tag">JavaScript</span>
              <span class="ptech-tag">MySQL</span>
              <span class="ptech-tag">HTML/CSS</span>
              <span class="ptech-tag">Apache</span>
            </div>
          </div>
        </div>

        <!-- Project 3: Team Nuvision website -->
        <div class="project-card reveal reveal-delay-3">
          <div class="project-header">
            <div class="project-icon">🌐</div>
          </div>
          <div class="project-body">
            <h3 class="project-name">Team Nuvision — Menu & Portfolio Sites</h3>
            <div class="project-meta">
              <span class="project-badge team">Team Nuvision</span>
            </div>
            <p class="project-desc">Built restaurant menu websites and a team portfolio for Team Nuvision. Managed a Linktree page linking all team resources and live demos. Also co-managed an Instagram page sharing IT and tech insights to build the team's online presence.</p>
            <div class="project-tech-stack">
              <span class="ptech-tag">PHP</span>
              <span class="ptech-tag">JavaScript</span>
              <span class="ptech-tag">HTML/CSS</span>
              <span class="ptech-tag">Linktree</span>
            </div>
          </div>
        </div>

        <!-- Project 4: Networking Lab -->
        <div class="project-card reveal reveal-delay-4">
          <div class="project-header">
            <div class="project-icon orange">🔌</div>
          </div>
          <div class="project-body">
            <h3 class="project-name">Network Lab Setup — ROj Institute</h3>
            <div class="project-meta">
              <span class="project-badge graduation">Internship</span>
            </div>
            <p class="project-desc">During my internship at ROj Institute, I trained on the E-Parwarda platform and configured network lab environments from scratch. Gained hands-on experience with routing, switching, and troubleshooting real network infrastructure.</p>
            <div class="project-tech-stack">
              <span class="ptech-tag">Networking</span>
              <span class="ptech-tag">Routing</span>
              <span class="ptech-tag">E-Parwarda</span>
              <span class="ptech-tag">Lab Config</span>
            </div>
          </div>
        </div>

        <!-- Project 5: Library Management System -->
        <div class="project-card reveal reveal-delay-1">
          <div class="project-header">
            <div class="project-icon">📚</div>
          </div>
          <div class="project-body">
            <h3 class="project-name">Library Management System</h3>
            <div class="project-meta">
              <span class="project-badge team">University — Team of 3</span>
            </div>
            <p class="project-desc">A desktop application for managing a library's book catalogue, member records, and borrowing transactions. Built collaboratively with two classmates as a university course project. Features include book search, borrowing history, and member management.</p>
            <div class="project-tech-stack">
              <span class="ptech-tag">Visual Basic</span>
              <span class="ptech-tag">MySQL</span>
              <span class="ptech-tag">.NET</span>
            </div>
          </div>
        </div>

        <!-- Project 6: Reklam / Advertisement Website -->
        <div class="project-card reveal reveal-delay-2">
          <div class="project-header">
            <div class="project-icon orange">📣</div>
          </div>
          <div class="project-body">
            <h3 class="project-name">Advertisement Website (Reklam)</h3>
            <div class="project-meta">
              <span class="project-badge team">University — Team of 3</span>
            </div>
            <p class="project-desc">A web-based advertising platform built as a university group project. Users can post, browse, and manage advertisements across different categories. The site features a responsive layout, category filtering, and a simple admin panel for content management.</p>
            <div class="project-tech-stack">
              <span class="ptech-tag">PHP</span>
              <span class="ptech-tag">JavaScript</span>
              <span class="ptech-tag">MySQL</span>
              <span class="ptech-tag">HTML / CSS</span>
            </div>
          </div>
        </div>

        <!-- Project 7: Chess Game -->
        <div class="project-card reveal reveal-delay-3">
          <div class="project-header">
            <div class="project-icon">♟️</div>
          </div>
          <div class="project-body">
            <h3 class="project-name">Chess Game</h3>
            <div class="project-meta">
              <span class="project-badge team">University — Team of 3</span>
            </div>
            <p class="project-desc">A two-player chess game built in Unity as a university project. Implemented all standard chess piece movement rules, turn management, and basic game-state validation (check detection). A fun challenge in game logic, OOP design, and working with Unity's 2D engine.</p>
            <div class="project-tech-stack">
              <span class="ptech-tag">Unity</span>
              <span class="ptech-tag">C#</span>
              <span class="ptech-tag">2D Game Dev</span>
              <span class="ptech-tag">OOP</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================
       EXPERIENCE TIMELINE
  ========================================= -->
  <section id="experience">
    <div class="container">
      <div class="section-header reveal">
        <p class="section-eyebrow">My Journey</p>
        <h2 class="section-title">Experience &amp; <span>education</span></h2>
      </div>

      <div class="timeline">

        <!-- Intern ROj -->
        <div class="timeline-item reveal">
          <div class="timeline-dot"></div>
          <div class="timeline-meta">
            <span class="timeline-date">2026 — 10 Weeks</span>
            <span class="timeline-type">Internship</span>
          </div>
          <div class="timeline-card">
            <div class="timeline-role">Network & Systems Intern</div>
            <div class="timeline-org">ROj Institute — Duhok, KRI</div>
            <p class="timeline-desc">Completed structured training on the E-Parwarda platform and configured network lab infrastructure. Set up, tested, and troubleshot routing environments in a real lab setting. Gained practical experience in network administration and hardware configuration.</p>
            <div class="timeline-tags">
              <span class="timeline-tag">Networking</span>
              <span class="timeline-tag">Routing</span>
              <span class="timeline-tag">E-Parwarda</span>
              <span class="timeline-tag">Lab Setup</span>
            </div>
          </div>
        </div>

        <!-- Team Nuvision -->
        <div class="timeline-item reveal reveal-delay-1">
          <div class="timeline-dot"></div>
          <div class="timeline-meta">
            <span class="timeline-date">2025 — 2026</span>
            <span class="timeline-type">Collaborative Dev</span>
          </div>
          <div class="timeline-card">
            <div class="timeline-role">Co-Developer & Tech Content Creator</div>
            <div class="timeline-org">Team Nuvision</div>
            <p class="timeline-desc">Built POS systems and restaurant menu websites as part of a small development team. Co-managed an Instagram page dedicated to IT and tech content. Created a Linktree hub linking all team resources and live project demos to grow the brand's visibility online.</p>
            <div class="timeline-tags">
              <span class="timeline-tag">PHP</span>
              <span class="timeline-tag">JavaScript</span>
              <span class="timeline-tag">MySQL</span>
              <span class="timeline-tag">Content Creation</span>
              <span class="timeline-tag">Team Collab</span>
            </div>
          </div>
        </div>

        <!-- Global Solutions -->
        <div class="timeline-item reveal reveal-delay-2">
          <div class="timeline-dot"></div>
          <div class="timeline-meta">
            <span class="timeline-date">2024 — 2025</span>
            <span class="timeline-type">International Program</span>
          </div>
          <div class="timeline-card">
            <div class="timeline-role">Participant — Sustainability Challenge</div>
            <div class="timeline-org">Global Solutions Sustainability Challenge (US, Jordan, Iraq)</div>
            <p class="timeline-desc">Participated in a virtual international exchange program with peers from the United States, Jordan, and Iraq. Collaborated across cultures to develop a sustainable business solution for a real community challenge. Strengthened my global collaboration, communication, and presentation skills.</p>
            <div class="timeline-tags">
              <span class="timeline-tag">International</span>
              <span class="timeline-tag">Sustainability</span>
              <span class="timeline-tag">Virtual Exchange</span>
              <span class="timeline-tag">Cross-cultural</span>
            </div>
          </div>
        </div>

        <!-- Education -->
        <div class="timeline-item reveal reveal-delay-3">
          <div class="timeline-dot" style="border-color: var(--orange); box-shadow: 0 0 12px rgba(255,107,53,0.4);"></div>
          <div class="timeline-meta">
            <span class="timeline-date" style="color:var(--orange);background:var(--orange-dim);">2022 — 2026</span>
            <span class="timeline-type">Education</span>
          </div>
          <div class="timeline-card">
            <div class="timeline-role">B.Sc. Computer Science</div>
            <div class="timeline-org">University of Duhok (UOD) — Duhok, KRI</div>
            <p class="timeline-desc">Four-year Computer Science degree covering algorithms, data structures, database systems, operating systems, software engineering, networking, and web development. Applied my knowledge through multiple team projects — including a graduation POS system, a library management app, a chess game, and an advertising website.</p>
            <div class="timeline-tags">
              <span class="timeline-tag">Algorithms</span>
              <span class="timeline-tag">Databases</span>
              <span class="timeline-tag">OOP</span>
              <span class="timeline-tag">Networking</span>
              <span class="timeline-tag">Web Dev</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =========================================
       CERTIFICATIONS
  ========================================= -->
  <section id="certifications">
    <div class="container">
      <div class="section-header reveal">
        <p class="section-eyebrow">Credentials</p>
        <h2 class="section-title">Certifications &amp; <span>training</span></h2>
      </div>

      <div class="certs-grid">
        <div class="cert-card reveal reveal-delay-1">
          <div class="cert-icon"><i class="fas fa-network-wired"></i></div>
          <div class="cert-body">
            <div class="cert-name">E-Parwarda Systems Training</div>
            <div class="cert-issuer">ROj Institute</div>
            <span class="cert-year">2026</span>
          </div>
        </div>

        <div class="cert-card reveal reveal-delay-2">
          <div class="cert-icon"><i class="fas fa-globe-americas"></i></div>
          <div class="cert-body">
            <div class="cert-name">Global Solutions Sustainability Challenge</div>
            <div class="cert-issuer">International Virtual Exchange Program</div>
            <span class="cert-year">2024</span>
          </div>
        </div>

        <div class="cert-card reveal reveal-delay-3">
          <div class="cert-icon"><i class="fas fa-graduation-cap"></i></div>
          <div class="cert-body">
            <div class="cert-name">Bachelor of Science — Computer Science</div>
            <div class="cert-issuer">University of Duhok (UOD)</div>
            <span class="cert-year">2026</span>
          </div>
        </div>

        <!-- Placeholder cert — replace with real ones -->
        <div class="cert-card reveal reveal-delay-4" style="opacity:0.6;">
          <div class="cert-icon" style="background:var(--orange-dim);color:var(--orange);">
            <i class="fas fa-plus"></i>
          </div>
          <div class="cert-body">
            <div class="cert-name">More certifications coming soon</div>
            <div class="cert-issuer">Update this section with your online courses</div>
            <span class="cert-year" style="background:var(--orange-dim);color:var(--orange);">Soon</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================
       CONTACT
  ========================================= -->
  <section id="contact">
    <div class="container">
      <div class="section-header reveal">
        <p class="section-eyebrow">Get In Touch</p>
        <h2 class="section-title">Let's <span>work together</span></h2>
      </div>

      <div class="contact-layout">
        <!-- Left: info -->
        <div>
          <h3 class="contact-info-title reveal">Open to opportunities</h3>
          <p class="contact-info-desc reveal">Whether you're looking for an intern, a freelance developer, or a junior team member — I'd love to hear from you. I'm currently available for internships, freelance projects, and entry-level developer roles.</p>

          <div class="contact-details">
            <div class="contact-detail-item reveal reveal-delay-1">
              <div class="cdi-icon"><i class="fas fa-envelope"></i></div>
              <div class="cdi-text">
                <div class="cdi-label">Email</div>
                <div class="cdi-value"><?= $email ?></div>
              </div>
            </div>
            <div class="contact-detail-item reveal reveal-delay-2">
              <div class="cdi-icon"><i class="fas fa-phone"></i></div>
              <div class="cdi-text">
                <div class="cdi-label">Phone</div>
                <div class="cdi-value"><?= $phone ?></div>
              </div>
            </div>
            <div class="contact-detail-item reveal reveal-delay-3">
              <div class="cdi-icon"><i class="fas fa-map-marker-alt"></i></div>
              <div class="cdi-text">
                <div class="cdi-label">Location</div>
                <div class="cdi-value"><?= $location ?></div>
              </div>
            </div>
          </div>

          <div class="social-row reveal reveal-delay-4">
            <a href="<?= $github ?>" target="_blank" class="social-btn">
              <i class="fab fa-github"></i> GitHub
            </a>
            <a href="mailto:<?= $email ?>" class="social-btn">
              <i class="fas fa-envelope"></i> Email
            </a>
          </div></div>

        <!-- Right: form -->
        <div class="contact-form-card reveal reveal-delay-2">
          <?php
          $formSent = false;
          $formError = '';
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cf_name'])) {
            $cf_name    = htmlspecialchars(trim($_POST['cf_name']));
            $cf_email   = htmlspecialchars(trim($_POST['cf_email']));
            $cf_subject = htmlspecialchars(trim($_POST['cf_subject']));
            $cf_message = htmlspecialchars(trim($_POST['cf_message']));

            if ($cf_name && $cf_email && $cf_message && filter_var($cf_email, FILTER_VALIDATE_EMAIL)) {
              $to      = $email;
              $subject = "Portfolio Contact: " . $cf_subject;
              $body    = "From: $cf_name <$cf_email>\n\n$cf_message";
              $headers = "From: $cf_email\r\nReply-To: $cf_email";
              if (mail($to, $subject, $body, $headers)) {
                $formSent = true;
              } else {
                $formError = "Message could not be sent. Please email me directly.";
              }
            } else {
              $formError = "Please fill in all fields with a valid email.";
            }
          }
          ?>

          <?php if ($formSent): ?>
            <div style="text-align:center; padding: 2rem 0;">
              <div style="font-size:3rem; margin-bottom:1rem;">✅</div>
              <h3 style="font-family:'Syne',sans-serif; margin-bottom:0.5rem;">Message sent!</h3>
              <p style="color:var(--text2); font-size:0.9rem;">Thanks <?= $cf_name ?>! I'll get back to you soon.</p>
            </div>
          <?php else: ?>
            <form method="POST" action="#contact">
              <?php if ($formError): ?>
                <div style="background:var(--orange-dim);border:1px solid rgba(255,107,53,0.3);color:var(--orange);padding:0.75rem 1rem;border-radius:0.75rem;font-size:0.85rem;margin-bottom:1.25rem;">
                  <?= $formError ?>
                </div>
              <?php endif; ?>

              <div class="form-row">
                <div class="form-group">
                  <label class="form-label" for="cf_name">Full Name</label>
                  <input type="text" id="cf_name" name="cf_name" class="form-control" placeholder="Your name" required>
                </div>
                <div class="form-group">
                  <label class="form-label" for="cf_email">Email Address</label>
                  <input type="email" id="cf_email" name="cf_email" class="form-control" placeholder="your@email.com" required>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label" for="cf_subject">Subject</label>
                <input type="text" id="cf_subject" name="cf_subject" class="form-control" placeholder="What's this about?">
              </div>

              <div class="form-group">
                <label class="form-label" for="cf_message">Message</label>
                <textarea id="cf_message" name="cf_message" class="form-control" rows="5" placeholder="Tell me about your project or opportunity..." required></textarea>
              </div>

              <button type="submit" class="form-submit">
                <i class="fas fa-paper-plane"></i> Send Message
              </button>
            </form>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================
       FOOTER
  ========================================= -->
  <footer>
    <div class="container">
      <div class="footer-inner">
        <span class="footer-brand">Ari Khalaf Abdullah</span>
        <p class="footer-text">Built with PHP &amp; passion in Duhok, Kurdistan &nbsp;•&nbsp; © <?= $year ?> <span>Ari Khalaf Abdullah</span></p>
        <div style="display:flex;gap:0.5rem;">
          <a href="<?= $github ?>" target="_blank" style="width:36px;height:36px;border:1px solid var(--border);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--text2);font-size:0.9rem;transition:all 0.2s;" onmouseover="this.style.borderColor='var(--cyan)';this.style.color='var(--cyan)';" onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--text2)';"><i class="fab fa-github"></i></a>
          <a href="mailto:<?= $email ?>" style="width:36px;height:36px;border:1px solid var(--border);border-radius:50%;display:flex;align-items:center;justify-content:center;color:var(--text2);font-size:0.9rem;transition:all 0.2s;" onmouseover="this.style.borderColor='var(--cyan)';this.style.color='var(--cyan)';" onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--text2)';"><i class="fas fa-envelope"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll to Top -->
  <button class="scroll-top" id="scrollTop" aria-label="Scroll to top">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- =========================================
       JAVASCRIPT
  ========================================= -->
  <script>
    // ---- THEME ----
    const html = document.documentElement;
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');

    const savedTheme = localStorage.getItem('theme') ||
      (window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark');
    setTheme(savedTheme);

    function setTheme(t) {
      html.setAttribute('data-theme', t);
      themeIcon.className = t === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
      localStorage.setItem('theme', t);
    }

    themeToggle.addEventListener('click', () => {
      setTheme(html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark');
    });

    // ---- NAVBAR SCROLL ----
    const navbar = document.getElementById('navbar');
    const scrollTopBtn = document.getElementById('scrollTop');

    window.addEventListener('scroll', () => {
      const sy = window.scrollY;
      navbar.classList.toggle('scrolled', sy > 50);
      scrollTopBtn.classList.toggle('visible', sy > 300);

      // Active nav link
      const sections = document.querySelectorAll('section[id]');
      const navAs = document.querySelectorAll('.nav-links a');
      sections.forEach(sec => {
        const top = sec.offsetTop - 100;
        const bot = top + sec.offsetHeight;
        if (sy >= top && sy < bot) {
          navAs.forEach(a => a.classList.remove('active'));
          const match = document.querySelector(`.nav-links a[href="#${sec.id}"]`);
          if (match) match.classList.add('active');
        }
      });
    }, { passive: true });

    scrollTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    // ---- MOBILE MENU ----
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
    });

    document.querySelectorAll('.mob-link').forEach(l => {
      l.addEventListener('click', () => {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
      });
    });

    // Smooth scroll for all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', e => {
        const t = document.querySelector(a.getAttribute('href'));
        if (t) { e.preventDefault(); t.scrollIntoView({ behavior: 'smooth' }); }
      });
    });

    // ---- TYPING ANIMATION ----
    const roles = [
      'CS Graduate',
      'PHP Developer',
      'Full-Stack Dev',
      'POS Architect',
      'Problem Solver'
    ];
    let ri = 0, ci = 0, del = false;
    const typedEl = document.getElementById('typedText');

    function type() {
      const r = roles[ri];
      typedEl.textContent = del ? r.slice(0, --ci) : r.slice(0, ++ci);
      if (!del && ci === r.length) { del = true; setTimeout(type, 1600); return; }
      if (del && ci === 0) { del = false; ri = (ri + 1) % roles.length; setTimeout(type, 300); return; }
      setTimeout(type, del ? 45 : 100);
    }
    setTimeout(type, 600);

    // ---- SCROLL REVEAL ----
    const revealEls = document.querySelectorAll('.reveal');
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('revealed');
          revealObserver.unobserve(e.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => revealObserver.observe(el));

  </script>
</body>
</html>
