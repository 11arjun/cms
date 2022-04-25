// birthcertifcate
$(document).ready(function(e) {
	var current_english_date = "2018-09-15";
	var next_year_english_date = "2019-09-15";

	var current_nepali_date = AD2BS(current_english_date);
	var next_year_nepali_date = AD2BS(next_year_english_date);

	var nepali_current_year = current_nepali_date.split("-");
	var nepali_next_year = next_year_nepali_date.split("-");

	var patra_sankya =
		convertEnglishToNepali(nepali_current_year[0]) +
		"/" +
		convertEnglishToNepali(nepali_next_year[0].substr(1, 3));

	$("#patra_sankya").val(patra_sankya);
	$("#reg_date_nep").val(AD2BS(current_english_date));
	$("#reg_date").val(AD2BS(current_english_date));
	$("#signed_date_nep").val(AD2BS(current_english_date));

	$("#signed_date_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("#signed_date").val(AD2BS(current_english_date));

	$("#signed_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$(".english-form").click(function() {
		// e.preventdefault
		// alert('t');
		// var englishFormValue = $(this).val();
		if ($(".english-form:checked").length > 0) {
			$(".showEnglishForm").show();
		} else {
			$(".showEnglishForm").hide();
		}
	});

	$(".english-form2").click(function() {
		// e.preventdefault
		// alert('t');
		// var englishFormValue = $(this).val();
		if ($(".english-form2:checked").length > 0) {
			$(".showEnglishForm2").show();
		} else {
			$(".showEnglishForm2").hide();
		}
	});

	$(".english-form3").click(function() {
		// e.preventdefault
		// alert('t');
		// var englishFormValue = $(this).val();
		if ($(".english-form3:checked").length > 0) {
			$(".showEnglishForm3").show();
		} else {
			$(".showEnglishForm3").hide();
		}
	});

	$(".english-form4").click(function() {
		// e.preventdefault
		// alert('t');
		// var englishFormValue = $(this).val();
		if ($(".english-form4:checked").length > 0) {
			$(".showEnglishForm4").show();
		} else {
			$(".showEnglishForm4").hide();
		}
	});

	if (($("#reg_no").val() !== "")  ) {
		$(".showEnglishForm5").show();
	}else{
    $(".showEnglishForm5").hide();
  }

	$("#reg_date_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#reg_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("#birth_date_bs_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100,
		// Options | Number of years to show

		onChange: function() {
			$("#birth_date_ad_nep").val(BS2AD($("#birth_date_bs_nep").val()));
		}
	});
	$("#birth_date_bs").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100,
		// Options | Number of years to show

		onChange: function() {
			$("#birth_date_ad").val(BS2AD($("#birth_date_bs").val()));
		}
	});

	$("#father_citizen_issued_date_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#mother_citizen_issued_date_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#father_citizen_issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#mother_citizen_issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
});

function convertEnglishToNepali(englishDigit) {
	//alert(englishDigit);

	var nepali_words = "";
	if (englishDigit != null) {
		// var englishDigitArray = englishDigit.split("");
		// console.log(englishDigitArray[0]);

		for (var i = 0; i < englishDigit.length; i++) {
			//alert(englishDigit.charAt(i));

			switch (englishDigit.charAt(i)) {
				case "1":
					nepali_words += "१";
					break;
				case "2":
					nepali_words += "२";
					break;
				case "3":
					nepali_words += "३";
					break;
				case "4":
					nepali_words += "४";
					break;
				case "5":
					nepali_words += "५";
					break;
				case "6":
					nepali_words += "६";
					break;
				case "7":
					nepali_words += "७";
					break;
				case "8":
					nepali_words += "८";
					break;
				case "9":
					nepali_words += "९";
					break;
				case "0":
					nepali_words += "०";
					break;

				default:
					nepali_words += englishDigit.charAt(i);
					break;
			}
		}
	}
	return nepali_words;
}

function removeQuoteforNepalinumber(str)
{
	var npNum = str.replace(/[']/g," ");

	return npNum.trim();
}


$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect: "none",
		closeEffect: "none"
	});

	$("#from_date").nepaliDatePicker({
		onChange: function() {
			var from_date = $("#from_date").val();
			var from_date = BS2AD(from_date);
			var current_date = "2018-09-15";

			if (new Date(from_date).getTime() > new Date(current_date).getTime()) {
				alert("कृपया, आजको मिति भन्दा पछाडिको मिति नछान्नुहोस।");
				$("#from_date").val("");
			}
		},
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100
	});

	$("#to_date").nepaliDatePicker({
		onChange: function() {
			var to_date = $("#to_date").val();
			var to_date = BS2AD(to_date);
			var current_date = "2018-09-15";

			if (new Date(to_date).getTime() > new Date(current_date).getTime()) {
				alert("कृपया, आजको मिति भन्दा पछाडिको मिति नछान्नुहोस।");
				$("#to_date").val("");
			}
		},
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
});

// death certificate

$("#death_date_bs_nep").nepaliDatePicker({
	npdMonth: true,
	npdYear: true,
	npdYearCount: 100,
	// Options | Number of years to show

	onChange: function() {
		$("#death_date_ad_nep").val(BS2AD($("#death_date_bs_nep").val()));
	}
});

$("#death_date_bs").nepaliDatePicker({
	npdMonth: true,
	npdYear: true,
	npdYearCount: 100,
	// Options | Number of years to show

	onChange: function() {
		$("#death_date_ad").val(BS2AD($("#death_date_bs").val()));
	}
});

// migration
$("#add-more-member").click(function(e) {
	e.preventDefault();

	var rowCount = $("#family_member_table tr").length;

	rowCount = "'" + rowCount + "'";

	var sn = convertEnglishToNepali(rowCount);

	var family_member =
		"<tr>" +
		'<td><input type="text" class="dashed-input-small-field" value=' +
		sn +
		"></td>" +
		'<td><input type="text" name="family_member_name[]" class="dashed-input-field"></td>' +
		'<td><input type="text" name="date_of_birth[]" class="dashed-input-field" id="date_of_birth"></td>' +
		'<td><input type="text" name="relation[]" class="dashed-input-small-field"></td>' +
		'<td><input type="text" name="event_registration[]" class="dashed-input-field"></td>' +
		'<td><input type="text" name="remakrs[]" class="dashed-input-field"></td>' +
		'<td><a href="" class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a></td>' +
		"</tr>";

	$("#family_member_table").append(family_member);
});

$("#add-more-member-eng").click(function(e) {
	e.preventDefault();

	var rowCount = $("#migration-family-member-table-eng tr").length;

	var family_member_english =
		"<tr>" +
		'<td><input type="text" class="dashed-input-small-field" value=' +
		rowCount +
		"></td>" +
		'<td><input type="text" name="family_member_name_eng[]" class="dashed-input-field"></td>' +
		'<td><input type="text" name="date_of_birth_eng[]" class="dashed-input-small-field"></td>' +
		'<td><input type="text" name="relation_eng[]" class="dashed-input-small-field"></td>' +
		'<td><input type="text" name="event_reg_eng[]" class="dashed-input-field"></td>' +
		'<td><input type="text" name="remarks_eng[]" class="dashed-input-field"></td>' +
		'<td><a href="" class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></a></td>' +
		"</tr>";

	$("#migration-family-member-table-eng").append(family_member_english);
});

/* Remove Property Valuation rows */
$("body").on("click", ".remove-field", function(e) {
	e.preventDefault();
	$(this)
		.parent()
		.parent()
		.remove();
});
$(document).ready(function(e) {
	var current_english_date = "2018-09-21";
	var next_year_english_date = "2019-09-21";

	var current_nepali_date = AD2BS(current_english_date);
	var next_year_nepali_date = AD2BS(next_year_english_date);

	var nepali_current_year = current_nepali_date.split("-");
	var nepali_next_year = next_year_nepali_date.split("-");

	var patra_sankya =
		convertEnglishToNepali(nepali_current_year[0]) +
		"/" +
		convertEnglishToNepali(nepali_next_year[0].substr(1, 3));

	$("#patra_sankya").val(patra_sankya);
	$("#issued_date").val(AD2BS(current_english_date));
	$("#signed_date_nep").val(AD2BS(current_english_date));
	$("#reg_date").val(AD2BS(current_english_date));
	$("#signed_date").val(AD2BS(current_english_date));

	$("#issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#reg_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#date_bs").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#bride_citizen_issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#bridegroom_citizen_issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#signed_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#signed_date_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#date_bs_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#bride_citizen_issued_date_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#bridegroom_citizen_issued_date_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("#date_bs_nep").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100,
		// Options | Number of years to show

		onChange: function() {
			$("#date_ad_nep").val(BS2AD($("#date_bs_nep").val()));
		}
	});
	$("#date_bs").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100,
		// Options | Number of years to show

		onChange: function() {
			$("#date_ad").val(BS2AD($("#date_bs").val()));
		}
	});
});
function convertEnglishToNepali(englishDigit) {
	//alert(englishDigit);

	var nepali_words = "";
	if (englishDigit != null) {
		// var englishDigitArray = englishDigit.split("");
		// console.log(englishDigitArray[0]);

		for (var i = 0; i < englishDigit.length; i++) {
			//alert(englishDigit.charAt(i));

			switch (englishDigit.charAt(i)) {
				case "1":
					nepali_words += "१";
					break;
				case "2":
					nepali_words += "२";
					break;
				case "3":
					nepali_words += "३";
					break;
				case "4":
					nepali_words += "४";
					break;
				case "5":
					nepali_words += "५";
					break;
				case "6":
					nepali_words += "६";
					break;
				case "7":
					nepali_words += "७";
					break;
				case "8":
					nepali_words += "८";
					break;
				case "9":
					nepali_words += "९";
					break;
				case "0":
					nepali_words += "०";
					break;

				default:
					nepali_words += englishDigit.charAt(i);
					break;
			}
		}
	}
	return nepali_words;
}

$(document).ready(function() {
	$("#child_name").on("keyup", function() {
		$("input[name='nibedak_name']").val($(this).val());
	});

	$("select[name='jagga_dhani']").change(function() {
		var post = $(this).val();
		if (post == "मेरो") {
			$("#prop_type").val("निवेदकको एकलौटी");
		} else {
			$("#prop_type").val("निवेदक समेतको संयुक्त");
		}
	});

	var p = $("select[name='jagga_dhani']").val();
	if (p == "मेरो") {
		$("#prop_type").val("निवेदकको एकलौटी");
	} else {
		$("#prop_type").val("निवेदक समेतको संयुक्त");
	}

	var current_english_date = "2018-09-25";
	var next_year_english_date = "2019-09-25";

	var current_nepali_date = AD2BS(current_english_date);

	var $issued_date = $("#issued_date").val();
	if ($issued_date == "") {
		$("#issued_date").val(AD2BS(current_english_date));
	}
	$("#issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("#sarjiman_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
});

$("#add_more_ghar_kayem").click(function(e) {
	e.preventDefault();

	var rowCount = $("#house_kayem_table tr").length - 2;
	rowCount = "'" + rowCount + "'";
	var sn = convertEnglishToNepali(rowCount);
	var new_ghar_kayem =
		"<tr>" +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
		sn +
		"> </td>" +
		'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_vdc[]" id="Sabik_vdc"  required="required"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward_no[]"> </td>' +
		'<td><input type="text" class="dashed-input-field" placeholder="   *" required="required" value="ईलाम नगरपालिका" name="nagarpalika_name[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" value="१" name="ward_no[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="ghar_nirman_year[]"> </td>' +
		'<td><a href="" id="add_more_ghar_kayem" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
		"</tr>";
	// $("#house_kayem_table").append(new_ghar_kayem);

	$("#house_kayem_table")
		.append(new_ghar_kayem)
		.find("#ghar_nirman_year" + rowCount)
		.nepaliDatePicker({
			npdMonth: true,
			npdYear: true,
			npdYearCount: 100
		});
});

$("#add_more_shresta").click(function(e) {
	e.preventDefault();

	var rowCount = $("#shresta_kayem_table tr").length.toString();
	rowCount = "'" + rowCount + "'";
	var sn = convertEnglishToNepali(rowCount);

	var new_shresta =
		"<tr>" +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
		sn +
		"> </td>" +
		'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_vdc[]" id="Sabik_vdc"  required="required"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward_no[]"> </td>' +
		'<td><input type="text" class="dashed-input-field" placeholder="   *" required="required" value="ईलाम नगरपालिका" name="nagarpalika_name[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" value="१" name="ward_no[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]"> </td>' +
		'<td><a href="" id="add_more_shresta" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
		"</tr>";
	$("#shresta_kayem_table").append(new_shresta);
});

$("#add_more_annual_income").click(function(e) {
	e.preventDefault();

	var rowCount = $("#annual_income_verification_table tr").length.toString();
	rowCount = "'" + rowCount + "'";
	var sn = convertEnglishToNepali(rowCount);

	var new_annual_income =
		"<tr>" +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
		sn +
		"> </td>" +
		'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="applicant_relation[]" id="applicant_relation"  required="required"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="parties_name[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="annual_income[]"> </td>' +
		'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="remarks[]"> </td>' +
		'<td><a href="" id="add_more_annual_income" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
		"</tr>";
	$("#annual_income_verification_table").append(new_annual_income);
});

/* Remove Property Valuation rows */
$("body").on("click", ".remove-field", function(e) {
	e.preventDefault();
	$(this)
		.parent()
		.parent()
		.remove();
});
$(document).ready(function(argument) {
	var post = $("select[name='hak_type']").val();

	if (post == "हकदार") {
		$("#darta_type").val("एकल");
	} else {
		$("#darta_type").val("संयुक्त");
	}

	$("#app_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("select[name='hak_type']").change(function(e) {
		var post = $("select[name='hak_type']").val();

		if (post == "हकदार") {
			$("#darta_type").val("एकल");
		} else {
			$("#darta_type").val("संयुक्त");
		}
	});

	var current_english_date = "2018-09-25";
	var next_year_english_date = "2019-09-25";

	var current_nepali_date = AD2BS(current_english_date);

	$("#add_more_nibedak").click(function(e) {
		e.preventDefault();
		var rowCount = $("#nibedak_table tr").length.toString();
		//rowCount ="'"+rowCount+"'";
		var sn = convertEnglishToNepali(rowCount);
		var new_nibedak =
			"<tr>" +
			"<td>" +
			sn +
			"</td>" +
			"<td>" +
			'<input type="text" class="dashed-input-field" placeholder="  " name="app_name[]" /> </td>' +
			'<td><input type="text" class="dashed-input-field" placeholder="  " name="app_relation[]" /> </td>' +
			'<td><input type="text" class="dashed-input-field" placeholder="  " name="app_date[]"  id="app_date' +
			rowCount +
			'"/> </td>' +
			'<td><a href="" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";

		// $("#nibedak_table").append(new_nibedak);
		$("#nibedak_table")
			.append(new_nibedak)
			.find("#app_date" + rowCount)
			.nepaliDatePicker({
				npdMonth: true,
				npdYear: true,
				npdYearCount: 100
			});
	});

	var X = window.location.href;
	//str = str.split(
	var Y = "GharJaggaNamsariKitani";

	//var a=str.split("GharJaggaNamsariKitani").pop();
	var a = X.slice(X.indexOf(Y) + Y.length);
	var b = a.charAt(1);

	if (b == "e") {
	} else {
		var $issued_date = $("#issued_date").val();
		if ($issued_date == "") {
			$("#issued_date").val(AD2BS(current_english_date));
		}
	}

	$("#issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("#death_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("#add_more_mritak_hakdar").click(function(e) {
		e.preventDefault();

		var rowCount = $("#mritak_hakdar_bibaran_table tr").length;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_mritak_hakdar =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td><input type="text" placeholder=" " class="dashed-input-field"  name="hakdarko_name[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field"  placeholder=" " name="mritak_relation[]"> </td>' +
			'<td><input type="text" class="dashed-input-field"  placeholder=" " name="father_husband_name[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" placeholder=" " name="ciitizenship_no[]"> </td>' +
			'<td><input type="text" placeholder=" " class="dashed-input-small-field"  name="kitta_no[]"> </td>' +
			'<td><a href=""  class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";

		$("#mritak_hakdar_bibaran_table").append(new_mritak_hakdar);
	});

	//------------------Namsari Hakdar add more------------

	$("#add_more_namsari_mritak_hakdar").click(function(e) {
		e.preventDefault();

		var rowCount = $("#mritak_namsari_hakdar_bibaran_table tr").length;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_mritak_hakdar =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td><input type="text" placeholder="  *" class="dashed-input-field" required="required" name="namsarihakdarko_name[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" required="required" placeholder="  *" name="namsarimritak_relation[]"> </td>' +
			'<td><input type="text" class="dashed-input-field" required="required" placeholder="  *" name="namsarifather_husband_name[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" required="required" placeholder="  *" name="namsariciitizenship_no[]"> </td>' +
			'<td><input type="text" placeholder=" " class="dashed-input-small-field"  name="namsarikitta_no[]"> </td>' +
			'<td><a href=""  class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";

		$("#mritak_namsari_hakdar_bibaran_table").append(new_mritak_hakdar);
	});

	$("#add_more_namsari_gharjagga_bibaran").click(function(e) {
		e.preventDefault();

		var rowCount = $("#namsari_ghar_jagga_bibaran_table tr").length;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_gharjagga_bibaran =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td><input type="text" placeholder="  *" class="dashed-input-field" required="required" name="ward_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" required="required" placeholder="  *" name="area[]"> </td>' +
			'<td><input type="text" class="dashed-input-field" required="required" placeholder="  *" name="jagga_bibaran_kitta_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" required="required" placeholder="  *" name="remakrs[]"> </td>' +
			'<td><a href=""  class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";

		$("#namsari_ghar_jagga_bibaran_table").append(new_gharjagga_bibaran);
	});

	// ----------------------------------------------------
	$("#add_more_namsari_jagga_bibaran_table").click(function(e) {
		e.preventDefault();

		var rowCount = $("#namsari_jagga_bibaran_table tr").length;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_namsari_jagga_bibaran =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td><input type="text" class="dashed-input-small-field" required="required" placeholder="  *" name="ward_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" required="required" placeholder="  *" name="area[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" required="required" placeholder="  *" name="jagga_bibaran_kitta_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-field" name="remakrs[]"> </td>' +
			'<td><a href="" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";

		$("#namsari_jagga_bibaran_table").append(new_namsari_jagga_bibaran);
	});

	/* Remove Property Valuation rows */
	$("body").on("click", ".remove-field", function(e) {
		e.preventDefault();
		$(this)
			.parent()
			.parent()
			.remove();
	});
});
$(document).ready(function() {
	/* Date picker */

	var current_english_date = "2018-09-25";
	var next_year_english_date = "2019-09-25";

	var current_nepali_date = AD2BS(current_english_date);

	$("#issued_date").val(AD2BS(current_english_date));
	$("#issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});
	$("#nimna_miti").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	$("#add_more_ghar_kayem").click(function(e) {
		e.preventDefault();

		var rowCount = $("#house_kayem_table tr").length - 2;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_ghar_kayem =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="sabik_vdc[]" id="Sabik_vdc"  required="required"> </td>' +
			'<td> <input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="sabik_ward_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-field" placeholder="   *" required="required" value="ईलाम नगरपालिका" name="ward_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" value="१" name="ward_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="area[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="ghar_nirman_year[]"> </td>' +
			'<td><a href="" id="add_more_ghar_kayem" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";

		// var new_ghar_kayem = '<tr>'+
		// '<td><input type="text" class="dashed-input-small-field" required="required" name="" value='+sn+'> </td>'+
		// '<td><input type="text" class="dashed-input-small-field" required="required" placeholder="   *" name="ward_no[]"> </td>'+
		// '<td><input type="text" placeholder="   *" class="dashed-input-small-field" required="required" name="kitta_no[]"></td>'+
		// '<td><input type="text" placeholder="   *" class="dashed-input-field" required="required" name="area[]"></td>'+

		// '<td><input type="text" placeholder="   *" class="dashed-input-field" required="required" name="ghar_nirman_year[]"> </td>'+
		// '<td><a href="" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>'+
		// '</tr>';

		$("#house_kayem_table").append(new_ghar_kayem);
	});

	/* Remove Property Valuation rows */
	$("body").on("click", ".remove-field", function(e) {
		e.preventDefault();
		$(this)
			.parent()
			.parent()
			.remove();
	});
});

$(document).ready(function() {
	var post = $("select[name='officer']").val();
	var actualpost = $("select[name='officer']").val();
	var actualname = $("input[name='hakim_ko_name']").val();

	var rel = $("input[name='document_type']").val();
	$("input[name='doc_name']").val(rel);

	var rel = $("select[name='relation_type']").val();
	$("#rel").val(rel);

	var mistake = $("select[name='mistake_type']").val();
	$("input[name='document_mistake']").val(mistake);

	$("select[name='mistake_type']").change(function() {
		var mistake = $("select[name='mistake_type']").val();
		$("input[name='document_mistake']").val(mistake);
	});
	var rel = $("select[name='relation_type']").val();
	if (rel == "आफ्नो") {
		$("#relnameanddetail").addClass("hidden");
		$("#rel").addClass("hidden");
	} else {
		$("#relnameanddetail").removeClass("hidden");
		$("#rel").removeClass("hidden");
		$("#rel").val(rel + "को");
	}

	$("select[name='relation_type']").change(function() {
		var rel = $("select[name='relation_type']").val();
		if (rel == "आफ्नो") {
			$("#relnameanddetail").addClass("hidden");
			$("#rel").addClass("hidden");
		} else {
			$("#relnameanddetail").removeClass("hidden");
			$("#rel").removeClass("hidden");
			$("#rel").val(rel);
		}
	});
	$("input[name='document_type']").keyup(function() {
		var rel = $("input[name='document_type']").val();

		$("input[name='doc_name']").val(rel);
	});

	var ar = window.location.pathname.split("/");
	var substr = "new";

	if (ar.length > 3) {
		var pagetype = ar[3];
		var ars = pagetype.split("edit");
		substr = pagetype.substr(0, 4);

		// if(substr!="edit"){
		if (substr === "edit") {
		} else {
			// getOfficerName(post,actualpost,actualname,substr);
		}
	} else {
		//getOfficerName(post,actualpost,actualname,substr);
	}
	$("select[name='officer']").change(function() {
		var ar = window.location.pathname.split("/");
		var substr = "new";

		if (ar.length > 3) {
			var pagetype = ar[3];
			var ars = pagetype.split("edit");
			substr = pagetype.substr(0, 4);
		}
		var post = $(this).val();
		getOfficerName(post, actualpost, actualname, substr);
	});

	var current_english_date = "2018-10-07";
	var next_year_english_date = "2019-10-07";

	var current_nepali_date = AD2BS(current_english_date);

	$("#issued_date").val(AD2BS(current_english_date));

	$("#issued_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100 // Options | Number of years to show
	});

	/* Date picker */

	$("#citi_date").nepaliDatePicker({
		npdMonth: true,
		npdYear: true,
		npdYearCount: 100
	});
});

$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
		}
	});

	$("#prov").change(function() {
		var selected = $(this).val();

		$.ajax({
			type: "GET",

			url: "/check_district/" + selected,

			data: {
				selected: selected
			},
			success: function(data) {
				var option = "";
				jQuery.each(data, function(i, val) {
					jQuery.each(val, function(k, valu) {
						option +=
							"<option value=" +
							valu.district_id +
							">" +
							valu.district_name +
							"</option>";
					});
				});
				$("#district").html(option);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("Error");
			}
		});
	});
});

$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
		}
	});

	$("#district").change(function() {
		var selected = $(this).val();

		$.ajax({
			type: "GET",

			url: "/check_local_state/" + selected,

			data: {
				selected: selected
			},
			success: function(data) {
				var option = "";
				jQuery.each(data, function(i, val) {
					jQuery.each(val, function(k, valu) {
						option +=
							"<option value=" +
							valu.local_state_id +
							">" +
							valu.local_state_name +
							"</option>";
					});
				});
				$("#local_state").html(option);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("Error");
			}
		});
	});
});

$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
		}
	});

	$("#sifaris_title").change(function() {
		var selected = $(this).val();

		$.ajax({
			type: "POST",

			url: "/get_readable_name/" + selected,

			data: {
				selected: selected
			},
			success: function(data) {
				var option = "<option>--सिफारिस छान्नुहाेस--</option>";
				jQuery.each(data, function(i, val) {
					jQuery.each(val, function(k, valu) {
						option +=
							"<option value=" +
							valu.table_name +
							">" +
							valu.table_readable_name +
							"</option>";
					});
				});
				$("#readable").html(option);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("Error");
			}
		});
	});
	//     $("#add-more-relation").click(function () {
	//      $("#relation-verification-table").each(function () {
	//          var tds = '<tr>';
	//          jQuery.each($('tr:last td', this), function () {
	//              tds += '<td>' + $(this).html() + '</td>';
	//          });
	//          tds += '</tr>';
	//          if ($('tbody', this).length > 0) {
	//              $('tbody', this).append(tds);
	//          } else {
	//              $(this).append(tds);
	//          }
	//      });
	// });

	$("#add-more-relation").click(function() {
		var rowCount = $("#relation-verification-table tr").length;

		rowCount = "'" + rowCount + "'";
		$("#relation-verification-table").append(
			'<tr><td><input class="dashed-input-small-field" placeholder="   *" type="text" required="required" value=' +
				rowCount +
				'></td><td><select name="relative_title[]"><option value="Mr">Mr</option><option value="Mrs">Mrs</option><option value="Miss">Miss</option></select></td><td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="relative_name[]"/></td><td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="relation[]"/></td><td height=120 width=120><div style="height:100%;width:100%;border:1px solid #000;"></div></td><td><button name="remove" id="add_more_basobas_data" class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></button></td></tr>'
		);
	});

	$("#add_more_basobas_data").click(function() {
		var rowCount = $("#temporary_basobas_table tr").length;

		rowCount = "'" + rowCount + "'";

		var sn = convertEnglishToNepali(rowCount);
		$("#temporary_basobas_table").append(
			'<tr><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="" value=' +
				sn +
				'> </td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="toll[]"></td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="batto_name[]"> </td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="ghar_no[]"> </td><td><button name="remove" id="add_more_basobas_data" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></td></tr>'
		);
	});

	$("#add_more_nata").click(function() {
		var rowCount = $("#nata_sambandha_table tr").length;

		rowCount = "'" + rowCount + "'";

		var sn = convertEnglishToNepali(rowCount);
		$("#nata_sambandha_table").append(
			'<tr><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="" value=' +
				sn +
				'> </td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relative_name[]"> </td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="relation[]"> </td><td><button name="remove" id="add_more_nata" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></tr>'
		);
	});

	$("#add_more_tinpuste_jagga").click(function() {
		var rowCount = $("#tinpuste_jagga_bibaran_table tr").length;
		rowCount = "'" + rowCount + "'";

		var sn = convertEnglishToNepali(rowCount);
		$("#tinpuste_jagga_bibaran_table").append(
			'<tr><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
				sn +
				'> </td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="seat_no[]"> </td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="kitta_no[]"> </td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="area[]"> </td><td><button name="remove" id="add_more_tinpuste_jagga" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></td></tr>'
		);
	});

	$("#add_more_tinpuste_bibaran").click(function(e) {
		e.preventDefault();
		var rowCount = $("#tinpuste_bibaran_table tr").length.toString();
		// rowCount ="'"+rowCount+"'";

		var sn = convertEnglishToNepali(rowCount);
		var demo =
			'<tr><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="name[]"> </td>' +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="relation[]"> </td>' +
			'<td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_no[]"> </td>' +
			'<td><input type="text" class="dashed-input-field" placeholder="   *" required="required" id="citizenship_issued_date' +
			rowCount +
			'" name="citizenship_issued_date[]"></td>' +
			'<td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_issued_district[]"> </td><td><button name="remove" id="add_more_tinpuste_bibaran" class="btn btn-danger remove-field" >' +
			'<span class="glyphicon glyphicon-minus"></span></button></td></tr>';
		$("#tinpuste_bibaran_table")
			.append(demo)
			.find("#citizenship_issued_date" + rowCount)
			.nepaliDatePicker({
				npdMonth: true,
				npdYear: true,
				npdYearCount: 100
			});
	});
	$("#add-more-member").click(function() {
		var rowCount = $("#internal-migration-table tr").length;
		rowCount = "'" + rowCount + "'";

		var sn = convertEnglishToNepali(rowCount);
		$("#internal-migration-table").append(
			'<tr><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
				sn +
				'></td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="full_name[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="relation[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="citizenship_no[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="ghar_no[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="batto_name[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="age[]"></td><td><button name="remove" id="add-more-member" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></td></tr>'
		);
	});

	$("#add-more-mritak-hakdar").click(function() {
		var rowCount = $("#mritak-hakdar-table tr").length;
		rowCount = "'" + rowCount + "'";

		var sn = convertEnglishToNepali(rowCount);
		$("#mritak-hakdar-table").append(
			'<tr><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
				sn +
				'></td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="hakdar_full_name[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="relation[]"></td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="father_name[]"></td><td><input type="text" class="dashed-input-field" placeholder="   *" required="required" name="citizenship_no[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="house_no[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="kitta_no[]"></td><td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="batto_name[]"></td><td><button name="remove" id="add-more-mritak-hakdar" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></button></td></tr>'
		);
	});

	$("#add-more-property").click(function() {
		var rowCount = $("#property-valuation-table tr").length;
		rowCount = "'" + rowCount + "'";

		$("#property-valuation-table").append(
			'<tr><td><input class="dashed-input-small-field" placeholder="   *" type="text" required="required" value=' +
				rowCount +
				"></td>" +
				'<td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="owner[]"/></td>' +
				'<td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="particular_plot_no[]"/></td>' +
				'<td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="area[]"/></td>' +
				'<td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="total_value[]"/></td>' +
				'<td><input class="dashed-input-field" placeholder="   *" type="text" required="required" name="remarks[]"/></td>' +
				'<td><button id="add-more-property" class="btn btn-danger remove-field"><span class="glyphicon glyphicon-minus"></span></button></td></tr>'
		);
	});

	$("#add_more_bijuli_kitta_no").click(function(e) {
		e.preventDefault();

		var rowCount = $("#bijuli_jadan_kitta_table tr").length - 0;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_bijuli_jadan =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="bijuli_jadan_kitta_no[]" id="bijuli_jadan_kitta_no"  required="required"> </td>' +
			'<td><a href="" id="add_more_bijuli_kitta_no" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";
		$("#bijuli_jadan_kitta_table").append(new_bijuli_jadan);
	});

	$("#add_more_kitta_no").click(function(e) {
		e.preventDefault();

		var rowCount = $("#dhara_jadan_kitta_table tr").length - 0;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_dhara_kitta_no =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="dhara_jadan_kitta_no[]" id="dhara_jadan_kitta_no"  required="required"> </td>' +
			'<td><a href="" id="add_more_kitta_no" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";
		$("#dhara_jadan_kitta_table").append(new_dhara_kitta_no);
	});

	$("#add_more_kitta_kat").click(function(e) {
		e.preventDefault();

		var rowCount = $("#kitta_kat_detail_table tr").length - 0;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_kitta_kat =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="seat_no[]" id="seat_no"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="kitta_no[]" id="kitta_no"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="area[]" id="area"  required="required"> </td>' +
			'<td><a href="" id="add_more_kitta_kat" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";
		$("#kitta_kat_detail_table").append(new_kitta_kat);
	});

	$("#add_more_ghar_bato_bibaran").click(function(e) {
		e.preventDefault();

		var rowCount = $("#ghar_bato_bibaran_table tr").length - 0;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_ghar_bato =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="ward_no[]" id="ward_no"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="seat_no[]" id="seat_no"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="kitta_no[]" id="kitta_no"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="area[]" id="area"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="batto_name[]" id="batto_name"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="bato_type[]" id="bato_type"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="ghar_abastha[]" id="ghar_abastha"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="remark[]" id="remark"  required="required"> </td>' +
			'<td><a href="" id="add_more_ghar_bato_bibaran" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";
		$("#ghar_bato_bibaran_table").append(new_ghar_bato);
	});

	$("#add_more_char_killa_bibaran").click(function(e) {
		e.preventDefault();

		var rowCount = $("#char_killa_bibaran_table tr").length - 0;
		rowCount = "'" + rowCount + "'";
		var sn = convertEnglishToNepali(rowCount);

		var new_char_killa =
			"<tr>" +
			'<td><input type="text" class="dashed-input-small-field" placeholder="   *" required="required" name="" value=' +
			sn +
			"> </td>" +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="ward_no[]" id="ward_no"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="seat_kitta_area[]" id="seat_kitta_area"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="batto_abastha[]" id="batto_abastha"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="east[]" id="east"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="west[]" id="west"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="north[]" id="north"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="south[]" id="south"  required="required"> </td>' +
			'<td>  <input type="text" class="dashed-input-field star" placeholder="   *" name="remark[]" id="remark"  required="required"> </td>' +
			'<td><a href="" id="add_more_char_killa_bibaran" class="btn btn-danger remove-field" ><span class="glyphicon glyphicon-minus"></span></a></td>' +
			"</tr>";
		$("#char_killa_bibaran_table").append(new_char_killa);
	});

	$(document).on("click", ".btn_remove", function() {
		var button_id = $(this).attr("id");
		$("#row" + button_id + "").remove();
	});
});

$("#print_certificate").click(function() {
	$(".hide-button").hide();

	window.print();

	$(".hide-button").show();
});

$.ajaxSetup({
	headers: {
		"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
	}
});

$(".btn-submit").click(function(e) {
	e.preventDefault();

	var darta_number = $("input[name=darta_number]").val();
	var darta_miti = $("input[name=darta_miti]").val();
	var subject = $("textarea[name=subject]").val();
	var patra_kisim = $("select[name=patra_kisim]").val();
	var patra_miti = $("input[name=patra_miti]").val();
	var pathauney_karyalaya = $("input[name=pathauney_karyalaya]").val();
	var pathauney_thegana = $("input[name=pathauney_thegana]").val();
	var chalani_no = $("input[name=chalani_no]").val();
	var kaifiyat = $("textarea[name=kaifiyat]").val();
	var sakha = $("input[name=sakha]").val();

	var ward = $("input[name=ward]").val();

	if (darta_number == "") {
		$("#msg").html("दर्ता नम्बर खाली छ");
	} else if (darta_miti == "") {
		$("#msg").html("दर्ता मिति खाली छ");
	} else if (subject == "") {
		$("#msg").html("बिषय खाली छ");
	} else if (patra_miti == "") {
		$("#msg").html("पत्रको मिति खाली छ");
	} else if (chalani_no == "") {
		$("#msg").html("पत्रको चलानी नं खाली छ");
	} else {
		$.ajax({
			type: "POST",

			url: "/darta",

			data: {
				darta_number: darta_number,
				darta_miti: darta_miti,
				subject: subject,
				patra_kisim: patra_kisim,
				patra_miti: patra_miti,
				pathauney_karyalaya: pathauney_karyalaya,
				pathauney_thegana: pathauney_thegana,
				chalani_no: chalani_no,
				kaifiyat: kaifiyat,
				sakha: sakha,
				ward: ward
			},

			success: function(data) {
				$("#msg").html("<li>" + data.success + "</li>");
				location.reload();
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("दर्ता नम्बर प्रयोगमा छ अन्य दर्ता नं हाल्नुहोस");
			}
		});
	}
});

jQuery(document).ready(function() {
	jQuery("#showCheckoutHistory").change(function() {
		if ($(this).prop("checked")) {
			$("#submit").removeAttr("disabled");
		} else {
			$("#submit").attr("disabled", true);
		}
	});
});
$.ajaxSetup({
	headers: {
		"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
	}
});

$(".btn-submit_1").click(function(e) {
	e.preventDefault();

	var chalani_number = $("input[name=chalani_number]").val();
	var chalani_miti = $("input[name=chalani_miti]").val();
	var subject = $("textarea[name=subject]").val();
	var patra_kisim = $("select[name=patra_kisim]").val();

	var pauney_karyalaya = $("input[name=pauney_karyalaya]").val();
	var pauney_thegana = $("input[name=pauney_thegana]").val();

	var kaifiyat = $("textarea[name=kaifiyat]").val();
	var bodartha = $("textarea[name=bodartha]").val();
	var sakha = $("input[name=sakha]").val();

	var ward = $("input[name=ward]").val();

	if (chalani_number == "") {
		$("#msg").html("चलानीनम्बर खाली छ");
	} else if (chalani_miti == "") {
		$("#msg").html("चलानीमिति खाली छ");
	} else if (subject == "") {
		$("#msg").html("बिषय खाली छ");
	} else {
		$.ajax({
			type: "POST",

			url: "/chalani",

			data: {
				chalani_number: chalani_number,
				chalani_miti: chalani_miti,
				subject: subject,
				patra_kisim: patra_kisim,
				pauney_karyalaya: pauney_karyalaya,
				pauney_thegana: pauney_thegana,
				kaifiyat: kaifiyat,
				sakha: sakha,
				ward: ward,
				bodartha: bodartha
			},

			success: function(data) {
				$("#msg").html("<li>" + data.success + "</li>");
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert("चलानीनम्बर प्रयोगमा छ अन्य चलानीनं हाल्नुहोस");
			}
		});
	}
});

$.ajaxSetup({
	headers: {
		"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
	}
});

$(".btn-darta_del").click(function(e) {
	var y = $(this).data("id");
	var x = confirm("Are you sure you want to delete ?");
	if (x) {
		e.preventDefault();
		$.ajax({
			type: "DELETE",

			data: { _method: "delete", id: y },
			url: "/darta/" + y,

			success: function(data) {
				$("#msg").html("<li>" + data.success + "</li>");
				location.reload();
			}
		});
	} else {
		alert("You cancel the delete request");
	}
});

$.ajaxSetup({
	headers: {
		"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
	}
});

$(".btn-chalani_del").click(function(e) {
	var y = $(this).data("id");
	var x = confirm("Are you sure you want to delete ?");
	if (x) {
		e.preventDefault();
		$.ajax({
			type: "DELETE",

			data: { _method: "delete", id: y },
			url: "/chalani/" + y,

			success: function(data) {
				$("#msg").html("<li>" + data.success + "</li>");
				location.reload();
			}
		});
	} else {
		alert("You cancel the delete request");
	}
});

$(document).ready(function() {
	$.ajaxSetup({
		headers: {
			"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
		}
	});

	$(".palika-btn").click(function() {
		var ward = $("select[name=ward]").val();
		var from_date = $("input[name=from-date]").val();
		var to_date = $("input[name=to-date]").val();

		$.ajax({
			type: "POST",

			url: "/palika",

			data: {
				ward: ward,
				from_date: from_date,
				to_date: to_date
			},

			success: function(data) {
				console.log(data.success);
				var panji_max = data.success.panji_max;
				var biz_max = data.success.biz_max;
				var citizen_max = data.success.citizen_max;
				var eco_max = data.success.eco_max;
				var edu_max = data.success.edu_max;
				var home_max = data.success.home_max;
				var open_max = data.success.open_max;
				var org_max = data.success.org_max;
				var other_max = data.success.other_max;

				// Load Charts and the corechart and barchart packages.
				google.charts.load("current", { packages: ["corechart"] });

				// Draw the pie chart and bar chart when Charts is loaded.
				google.charts.setOnLoadCallback(drawChart);

				function drawChart() {
					var data = new google.visualization.DataTable();
					data.addColumn("string", "Topping");
					data.addColumn("number", "Slices");
					data.addRows([
						["रास्ट्रिय पञ्जीकरण", panji_max],
						["नेपाली नागरिकता", citizen_max],
						["घर / जग्गा जमिन", home_max],
						["संघ संस्था", org_max],
						["व्यापार / व्यवसाय", biz_max],
						["शैक्षिक", edu_max],
						["आर्थिक", eco_max],
						["खुल्ला ढाँचा", open_max],
						["अन्य", other_max]
					]);

					var piechart_options = {
						title: "Pie Chart: हाल सम्म जारी गरिएको सिफारिस विवरण",
						width: 550,
						height: 500
					};
					var piechart = new google.visualization.PieChart(
						document.getElementById("piechart_div")
					);
					piechart.draw(data, piechart_options);

					var barchart_options = {
						title: "Barchart: हाल सम्म जारी गरिएको सिफारिस विवरण",
						width: 550,
						height: 500,
						legend: "none"
					};
					var barchart = new google.visualization.BarChart(
						document.getElementById("barchart_div")
					);
					barchart.draw(data, barchart_options);
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {}
		});
	});
});
