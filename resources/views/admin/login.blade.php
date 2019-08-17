@include('admin/sections/head')
    <div class="container pt-5">
      <!-- Row start-->
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-6">
          <h2 class="text-center">Admin login portal</h2>
          {!! Form::open(['url' => '/admin/profile', 'class' => 'login_form']) !!}
              <div class="form-group">
                <!-- @csrf -->
                @method('GET')

                {!! Form::label('email', 'Email:', ['class' => 'email_label']) !!}
                {!! Form::email('email', $value = null, [
                    'class' => 'form-control',
                    'placeholder' => 'Enter your email'
                  ])
                !!}
              </div>
              <div class="form-group">
                {!! Form::label('password', 'Password:', ['class' => 'password_label']) !!}
                {!! Form::password('password',[
                    'class' => 'form-control', 
                    'placeholder' => 'Enter your Password', 
                    'type' => 'password'
                  ])
                !!}
              </div>
              <!-- <div class="form-group form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div> -->
              {!! Form::submit('Submit', [
                'class' => 'btn btn-primary'
                ])
              !!}

             {!! Form::close()  !!}

        </div>
      </div>
      <!-- Row close -->
    </div>
@include('admin/sections/footer')
