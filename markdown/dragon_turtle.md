---
statblock: true
name: 'Dragon Turtle - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 17
ac: 21
hp: 264
hit_dice: '16d20 + 96'
speed: '20 ft., swim 40 ft.'
stats:
    - 24
    - 10
    - 22
    - 14
    - 16
    - 16
damage_resistances: 'cold, fire'
saves:
    dexterity: 6
    constitution: 12
    intelligence: 8
    wisdom: 9
skillsaves:
    history: 8
    insight: 9
    nature: 8
senses: 'darkvision 120 ft., passive Perception 13'
languages: 'Aquan, Common, Draconic'
traits:
    0: { name: Amphibious, desc: 'The dragon turtle can breathe air and water.' }
    1: { name: 'Innate Spellcasting', desc: "The dragon turtle's spellcasting ability is Wisdom (spell save DC 17). It can innately cast the following spells, requiring no components:" }
    traits: ['3/day each: control weather, water breathing, zone of truth']
actions:
    - { name: Bite, desc: "Melee Weapon Attack: +13 to hit, reach 15 ft., one target. Hit: 52 (7d12 + 7) piercing damage. If the target is a creature, it is grappled (escape DC 21). Until this grapple ends, the dragon turtle can't bite a different creature, and it has advantage on bite attacks against the grappled creature." }
    - { name: Ram, desc: 'Melee Weapon Attack: +13 to hit, reach 15 ft., one target. Hit: 46 (6d12 + 7) bludgeoning damage. This attack deals double damage against objects, vehicles, and constructs.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +13 to hit, reach 15 ft., one target. Hit: 46 (6d12 + 7) bludgeoning damage. If the target is a creature, it makes a DC 21 Strength saving throw. On a failure, it is pushed 15 feet away from the dragon turtle and knocked prone.' }
    - { name: 'Steam Breath (Recharge 56)', desc: 'The dragon turtle exhales steam in a 90-foot cone. Each creature in the area makes a DC 20 Constitution saving throw, taking 52 (15d6) fire damage on a failed save or half as much on a successful one.' }
    - { name: 'Lightning Storm (1/Day)', desc: 'Hundreds of arcs of lightning crackle from the dragon turtle. Each creature within 90 feet makes a DC 17 Dexterity saving throw, taking 35 (10d6) lightning damage on a failure or half damage on a success.' }
reactions:
    - { name: Retract, desc: "When the dragon turtle takes 50 damage or more from a single attack or spell, it retracts its head and limbs into its shell. It immediately regains 20 hit points. While retracted, it is blinded; its Speed is 0; it can't take reactions; it has advantage on saving throws; attacks against it have disadvantage; and it has resistance to all damage. The dragon turtle stays retracted until the beginning of its next turn." }
    - { name: Tail, desc: 'When the dragon turtle is hit by an opportunity attack, it makes a tail attack.' }
'bonus actions':
    - { name: Claws, desc: 'Melee Weapon Attack: +13 to hit, reach 15 ft., one target. Hit: 25 (4d8 + 7) slashing damage.' }
combat:
    - { name: 'The dragon turtle uses its ram attack against ships', desc: "When fighting creatures, it uses Steam Breath if available and its bite otherwise. It generally uses its tail only as a reaction, unless it wants to push a melee combatant before retreating. It uses Lightning Storm when it can't otherwise reach its enemies. It attacks with its claws every turn. Dragon turtles flee into deep water when bloodied; if pursued, they turn around once their Steam Breath recharges and fight to the death." }

---
```statblock
monster: Dragon Turtle - A5E
```
