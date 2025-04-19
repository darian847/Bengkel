<div 
	x-data="{
		printDiv() {
			var printContents = this.$refs.container.innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	}" 
	x-cloak
	x-ref="container"
	class="print:text-black relative"
>
@isset($printButton)
{{ $printButton }}
@else
<div class="print:hidden max-w-screen-xl px-4 mx-auto lg:px-98 w-auto" >
  <button type="button" x-on:click="printDiv()" class="lg:px-52 bg-opacity-50 text-gray-700 shadow-sm border px-2 py-1 rounded-md bg-white flex items-center"><svg xmlns="http://www.w3.org/2000/svg" class="-ml-1 mr-1 h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" /></svg>Print</button>
</div>
@endisset

	<table class="table-auto w-2/3">
		
		
		 
		<tbody>
			<tr>
				<td>
					{{ $slot }}
				</td>
			</tr>
		</tbody>

		
	</table>
</div>

