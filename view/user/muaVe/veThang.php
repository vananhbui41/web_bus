<div style="width: 40%; float:left">
    <form>
        <legend><h1>Mua vé tháng</h1></legend>
        <div class="mb-3">
            
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Một tuyến</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Liên tuyến</button>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <label for="Select" class="form-label">Chọn tuyến xe</label>
                    <select id="tuyenXe" class="form-select">
                        <option>01</option>
                        <option>02A</option>
                        <option>16</option>
                    </select>

                    <label for="Select" class="form-label">Ngày nhận vé</label>
                    <input type="date" class="form-control" id="ticketday" name="NgayNhanVe" placeholder="mm/dd/yyyy">
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <label for="Select" class="form-label">Ngày nhận vé</label>
                    <input type="date" class="form-control" id="ticketday" name="NgayNhanVe" placeholder="mm/dd/yyyy">
                </div>
            </div>

        
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

<div style="width: 50%; float:right">
        <h1>Giá vé: </h1>
        <button type="submit" class="btn btn-primary">Thanh toán</button>
</div>