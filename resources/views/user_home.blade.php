@extends('users.layouts.template')
@section('title', 'Bienvenido')
@include('users.include.nav')
@section('content')
<style>

#glass-morphism {
  background-color: #0d0914;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.gradient-sphere {
  width: 200px;
  height: 200px;
  background: rgb(252, 255, 188);
  background: linear-gradient(
    90deg,
    rgba(252, 255, 188, 1) 0%,
    rgba(231, 115, 213, 1) 50%,
    rgba(138, 228, 235, 1) 100%
  );
  border-radius: 50%;
  background-size: 230%;
  background-position: center;
}

#sphere-1 {
  margin: 0 90px 140px 5px;
}

#sphere-2 {
  margin: 180px 0 0px 75px;
}

.credit-card {
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  backdrop-filter: blur(22px);
  box-shadow: inset 0 0 0 200px rgba(255, 255, 255, 0.074);
  color: #e6e6e6;
  padding: 30px;
  border-radius: 12px;
  gap: 15px;
  min-width: 250px;
  min-height: 130px;
  border: 3px solid rgba(255, 255, 255, 0.12);
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
}

.credit-card .credit-card-brand {
  font-size: 32px;
  font-weight: 900;
  font-style: italic;
  align-self: flex-end;
  justify-content: flex-start;
  opacity: 0.8;
}

.credit-card .credit-card-info {
  display: flex;
  flex-direction: column;
  justify-self: flex-end;
  gap: 10px 0;
  opacity: 0.8;
  font-size: 17px;
}

.credit-card .credit-card-info .credit-card-number {
  letter-spacing: 2px;
}

.credit-card .credit-card-info .credit-card-date {
  font-size: 11px;
  font-weight: 300;
}

.r-270 {
  transform: rotate(270deg);
}

@keyframes example {
  0% {
    margin-left: 0px;
  }

  50% {
    margin-left: 120px;
  }

  100% {
    margin-left: 0px;
  }
}

</style>
<div id="glass-morphism">
  <div class="gradient-sphere" id="sphere-1"></div>
  <div class="gradient-sphere r-270" id="sphere-2"></div>
  <div class="credit-card">
    <span class="credit-card-brand">Card</span>
    <div class="credit-card-info">
      <span class="credit-card-number">5939 4882 94949 303</span>
      <span class="credit-card-date">12/22</span>
    </div>
  </div>
</div>
@endsection