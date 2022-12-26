// alpine
function handlerContact() {
    return {
        contact_lot: {
            first_name: '',
            last_name: '',
            email: '',
            phone: ''
        },
        contact_user: {
            name: '',
            subject: '',
            email: '',
            message: ''
        },
        lot: {
            id: null,
            number: '',
            area: '',
            money_advance: null,
            deadlines: null,
            price_by_square_meter: null,
            total_price: null,
            month_charge: null,
            available: null,
            img: ''
        },
        getLotById(id) {
            
            fetch(`/landing/backend/lots.php?id=${id}`)
            .then(res => res.json())
            .then(data => {

                // assing values
                const { 
                    id, 
                    number, 
                    area, 
                    money_advance, 
                    deadlines, 
                    price_by_square_meter, 
                    total_price, 
                    month_charge, 
                    available,
                    img } = data.lot

                this.lot.id = id
                this.lot.number = number
                this.lot.area = area
                this.lot.money_advance = this.formartPrice(money_advance)
                this.lot.deadlines = deadlines
                this.lot.price_by_square_meter = this.formartPrice(price_by_square_meter)
                this.lot.total_price = this.formartPrice(total_price)
                this.lot.front_and_width = ' 7m de frente x 16.5 de fondo'
                this.lot.available = available
                this.lot.img = img

                // reset values
                this.contact_lot.first_name = ''
                this.contact_lot.last_name = ''
                this.contact_lot.email = ''
                this.contact_lot.phone = ''

                // show modal
                $('#modal-lots').modal('show')
            })
            .catch(err => toastr.error('Ocurrio un error, intentalo de nuevo'))
        },
        formartPrice(value) {
            return value.toLocaleString('en-US', {
                style: 'currency',
                currency: 'USD',
            })
        },
        onSubmitLotMail() {

            if (
                this.contact_lot.first_name !== '' &&
                this.contact_lot.last_name !== '' &&
                this.contact_lot.email !== '' &&
                this.contact_lot.phone !== ''
            ) {

                const form_contact_lot = document.getElementById('form-lot')
                const data_contact_lot = new FormData(form_contact_lot)
                data_contact_lot.append('lot_number', this.lot.number)

                fetch('/landing/backend/contact-lots.php', {
                    method: 'POST',
                    body: data_contact_lot,
                })
                .then(res => res.json())
                .then(data => {

                    this.contact_lot.first_name = ''
                    this.contact_lot.last_name = ''
                    this.contact_lot.email = ''
                    this.contact_lot.phone = ''

                    $('#modal-lots').modal('hide')                    

                    toastr.success('El mensaje se envio con exito')
                })
                .catch(err => toastr.error('Ocurrio un error, intentalo de nuevo'))

            } else {
                toastr.error('Verifica los datos ingresados')
            }

        },
        onSubmitUserMail() {

            if (
                this.contact_user.name !== '' &&
                this.contact_user.subject !== '' &&
                this.contact_user.email !== '' &&
                this.contact_user.message !== ''
            ) {

                const form_contact_user = document.getElementById('form-user')
                const data_contact_lot = new FormData(form_contact_user)

                fetch('/landing/backend/contact-users.php', {
                    method: 'POST',
                    body: data_contact_lot,
                })
                .then(res => res.json())
                .then(data => {

                    this.contact_user.name = ''
                    this.contact_user.subject = ''
                    this.contact_user.email = ''
                    this.contact_user.message = ''

                    $('#modal-lots').modal('hide')                    

                    toastr.success('El mensaje se envio con exito')
                })
                .catch(err => toastr.error('Ocurrio un error, intentalo de nuevo'))

            } else {
                toastr.error('Verifica los datos ingresados')
            }

        },
        closeModal() {
            $('#modal-lots').modal('hide') 
        }
    }
}