<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header change-bg">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body change-bg">
          <form>
            <div class="bg-secondary rounded h-100 p-4">
              {{-- <h6 class="mb-4">Floating Label</h6> --}}
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput"
                      placeholder="Title">
                  <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput"
                      placeholder="info">
                  <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating mb-3">
                  <select class="form-select" id="floatingSelect"
                      aria-label="Floating label select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                  </select>
                  <label for="floatingSelect">Works with selects</label>
              </div>
              <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here"
                      id="floatingTextarea" style="height: 150px;"></textarea>
                  <label for="floatingTextarea">Comments</label>
              </div>
          </div>
          </form>
        </div>
        <div class="modal-footer change-bg">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>